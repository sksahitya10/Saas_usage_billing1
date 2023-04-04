<?php

include 'config.php';
session_start();

$rand_num = $_SESSION['rand_num'];


date_default_timezone_set("Asia/Calcutta");
$date = date("H:i:s");

$sql = "UPDATE userlog SET logoutTime = '$date' WHERE sessionid = $rand_num";
$con->query($sql);
session_unset();
//session_destroy();
$_SESSION['msg']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>
