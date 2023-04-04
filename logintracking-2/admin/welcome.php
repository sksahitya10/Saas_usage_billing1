<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body class="admin">
<?php
session_start();
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">  
 <h2 class="welcome">Welcome Admin!</h2>
<p class="user">Welcome : <?php echo $_SESSION['login'];?> | <a href="logout.php">Logout</a> </p>
<p class="userlog">Click the below button to see the user log</p>
    <h3><a href="userlog.php">User Access log</a></h3>
 </body>
</html>
<?php
} else{
header('location:logout.php');
}
?>
</body>
</html>

<style type="text/css">
    .admin{
        background-color: #ff001b2e;
    }
    h2{
        font-size: 50px;
        text-align: center;
    }
    .user{
        float: right;
        
    }
    h3
    {
        text-align: center;
    }
    h3 a{
        
        background-color: green;
        text-decoration: none;
        padding: 10px;

    }
    .userlog{
        text-align: center;
    }
</style>