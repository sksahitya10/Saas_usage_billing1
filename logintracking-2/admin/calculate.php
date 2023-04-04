<?php 
include('config.php');
session_start();
$id = $_GET['id'];

$query=mysqli_query($con,"select * from userlog where  sessionid='$id'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
	$username = $row['username'];
	$intime = $row['loginTime'];
	$outtime = $row['logoutTime'];

	$time = date('H:i:s',strtotime($intime));
}

	$from_time = strtotime($time); 
	$to_time = strtotime($outtime); 
	$diff_minutes = round(abs($from_time - $to_time) / 60,2). " minutes";
	$diff_amount = round(abs($from_time - $to_time) / 60,2);
	$cost = $diff_amount/2;
	
?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Amount Calculation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>    

<form name="amount" method="POST" >
	<p class="user">Welcome : <?php echo $_SESSION['login'];?> | <a href="logout.php">Logout</a> </p>
  <header>Amount Calculation</header>
  <!--<p style="color:red;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
<p style="padding-left:1%;"><b>Usernames/passwords for demo:</b> anuj/Demo@123, admin/Test@123 , demo/User@123, test/123456</p>-->
  <label>User Name </label>
  <input name="uname" type="text" value="<?php echo $username; ?>" required />
  <label>Login Time </label>
  <input name="intime" type="text" value="<?php echo $time; ?>" required />
  <label>Logout Time </label>
  <input name="outtime" type="text" value="<?php echo $outtime; ?>" required />
  <label>Total Time </label>
  <input name="loggedtime" type="text" value="<?php echo $diff_minutes; ?>" required />
  <label>Total Amount Rs. </label>
  <input name="amount" type="text" value="<?php echo $cost; ?>" required />
  
</form>
  </body>
</html>

