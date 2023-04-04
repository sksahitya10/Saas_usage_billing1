<?php
session_start();
include('config.php');
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">    
<p class="user"><a href="welcome.php">Welcome : <?php echo $_SESSION['login'];?> </a>| <a href="logout.php">Logout</a> </p>
<table class="center">
<tr>
<th>Sno.</th>
<th>User Id</th>
<th>User Name</th>
<th>Login Time</th>
<th>Logout Time</th>

</tr>

<?php $query=mysqli_query($con,"select * from userlog where  userId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['userId'];?></td>
<td><?php echo $row['username'];?></td>
<!--<td><?php //echo $row['userIp'];?></td>-->
<td><?php echo $row['loginTime'];?></td>
<td><?php echo $row['logoutTime'];?></td>

<?php 

$session_id = $row['sessionid'];
?>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
 </body>
</html>
<?php
} else{
header('location:logout.php');
}
?>
<style type="text/css">
    table, th, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    padding: 5px;
}
    table.center {
  margin-left: auto; 
  margin-right: auto;
}
    th{
        background-color: grey;
    }
    .user{
        float: right;
        
    }
     h2{
        font-size: 50px;
        text-align: center;
    }
</style>