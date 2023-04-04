<?php

include 'config.php';

if(isset($_POST['reg']))
{
  $uname=$_POST['uname'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];


$sql = "INSERT INTO login (userName, password, email)
VALUES ('$uname', '$pwd', '$email')";

if ($con->query($sql) === TRUE) {
 $extra="index.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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

<form name="register" method="post" >
  <header>Registration Form</header>

  <label>Username <span>*</span></label>
  <input name="uname" type="text" value="" required />
  <label>Password <span>*</span></label>
  <input name="pwd" type="password" value="" required />
  <label>Email <span>*</span></label>
  <input name="email" type="email" value="" required />
  <button type="submit" name="reg">Register</button>
</form>
  </body>
</html>
