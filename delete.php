<?php
include("mysqlicon.php");
session_start();
$user=$_GET['id'];
$me=$_SESSION['id'];
$a="select * from requests where recid='$user' and senderid='$me' or recid='$me' and senderid='$user'";
$b=mysqli_query($con, $a);
if ($b) {
	header("location:index.php?message=delete");
}
else{
	header("location:index.php?notfriends=delete");

}
?>
