<?php
session_start();
include 'config.php';
if(isset($_POST['login']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password']; // get password
//query for match  the user inputs
$ret=mysqli_query($con,"SELECT * FROM login WHERE userName='$username'  and password='$password'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0)
{
$_SESSION['login']=$username; // hold the user name in session
$_SESSION['id']=$num['id']; // hold the user id in session
$_SESSION['rand_num'] = rand(1,1000);
$sessionid = $_SESSION['rand_num'];
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
// query for inser user log in to data base
mysqli_query($con,"insert into userlog(userId,sessionid,username,userIp) values('".$_SESSION['id']."','$sessionid','".$_SESSION['login']."','$uip')");
// code redirect the page after login
$extra="welcome.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
// If the userinput no matched with database else condition will run
else
{
$_SESSION['msg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
 }
}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>User login and tracking in PHP using PHP OOPs Concept</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>    

<form name="login" method="post" >
<h1 style="text-align:center">Usage & Billing System</h1>
  
  <header>Admin Login</header>
  <p style="color:red;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>

  <label>Username <span>*</span></label>
  <input name="username" type="text" value="" required />
  <label>Password <span>*</span></label>
  <input name="password" type="password" value="" required />
  <button type="submit" name="login">Login</button>
</form>
  </body>
</html>
