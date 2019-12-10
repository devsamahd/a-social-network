<?php
include("mysqlicon.php");
session_start();

$id=$_SESSION['id'];

$a="update tint set status=now() where id='$id'";
$b=mysqli_query($con, $a);


?>