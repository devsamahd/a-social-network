
<?php
include('mylinks.php');
session_start();
$senderid=$_SESSION['id'];
$recid=$_GET['id'];
$con=mysqli_connect('localhost','root','','samahd');


	$e="select * from requests where senderid=$senderid and recid=$recid";

		$f=mysqli_query($con, $e);
	if ($f->num_rows==0) {
		
	
  $pending=0;
  	$c="insert into requests values('','$recid','$senderid','$pending')";
  	$d=mysqli_query($con,$c);
  	
  		
      header("location:friends.php");

  	
  	
  }
  else{
     header("location:friends.php");
  }
  

?>