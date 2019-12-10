 <?php
include('mysqlicon.php');

 $pid=$_GET['pid'];
 echo $pid;
 $q="select * from comments where postid='$pid'";
      $r=mysqli_query($con, $q);
      while ($row=mysqli_fetch_array($r)) {
        echo "<div align='left' class='container' style='padding-bottom:;'>".$row['coommenttext']."</div>";
      }

 ?>