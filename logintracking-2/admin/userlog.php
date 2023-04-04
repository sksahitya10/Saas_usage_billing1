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
    
<p class="user">Welcome : <?php echo $_SESSION['login'];?> | <a href="logout.php">Logout</a> </p>
<h2>All User Log</h2>
<table class="center">
<tr>
<th>Sno.</th>
<th>User Id</th>
<th>User Name</th>
<th>Login Time</th>
<th>Logout Time</th>
<th>Bill Calculation</th>
</tr>

<?php $query=mysqli_query($con,"select * from userlog WHERE userId !='1'");
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

<td><a class="calc" href='<?php echo "calculate.php?id=$session_id"?>'>Calculate</a></td>
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
    .calc{
        padding: 3px;
        background-color: green;
        text-decoration: none;
        color: white;
    }
</style>