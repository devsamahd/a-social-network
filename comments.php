<?php 
include('mysqlicon.php');
  
 $com=$_GET['com'];
  $senderid=$_GET['id'];
  $recid=$_GET['user'];
  $postid=$_GET['pid'];
  $time="";

   $query="insert into comments values('','$postid','$recid','$senderid','$com','$time')";
    $run=mysqli_query($con, $query);
 

  	

  
 
?>