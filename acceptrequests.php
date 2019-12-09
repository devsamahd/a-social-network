<?php 
include('mysqlicon.php');
session_start();

      $senderid=$_GET['id'];
      $myid=$_SESSION['id'];
      
      
      $n="update requests set pending=1 where senderid=$senderid and recid=$myid";
      $m=mysqli_query($con,$n);
      if ($m) {
        header("location:userprofile.php");

      }
     
    ?>