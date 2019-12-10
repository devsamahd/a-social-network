<?php  include('validator.php'); include('mysqlicon.php'); include('mylinks.php');?>

<?php
$ss=session_status();
if ($ss==PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['id'])) {
  header("location:login.php");
}

?> 

<style>
  .nav-link{
    color: gray !important;
  }
</style>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>messages</title>
</head>
<body>
  <nav class="">
    <div class="navbar text-light " style="height: 40px; font-size: 20px; padding:0px; background-color: #f7f5f5;" >
      <div class="navbar-brand" id='navbrand'><a href="#" class="navbar-brand"><b><div id=header><font color= gold face="magneto">.Chat</div></b></a></font>
</div>
      <div class="navbar-nav"><a class="nav-link" href="index.php" style="color: white;">home<i class="fa fa-home"></i></a>
     </div>
      <div class="navbar-nav"><a class="nav-link" href="userprofile.php" style="color: white;">Profile<i class="fa fa-user"></i></a>
      </div>
      <div class="navbar-nav"><a class="nav-link" href="friends.php" style="color: white;">Find Friends<i class="fa fa-group"></i></a>
      </div>
      <div class="navbar-nav"><a class="nav-link" href="messages.php" style="color: white;">Chat<i class="fa fa-comment"></i></a>
      </div>
  <div class="navbar-nav">
  <a href="logout.php" class="navbar-link"><i class="fa fa-sign-out" style="color: white;"></i></a></li>

      </div>

    </div>
  </nav>

<?php



  $dp=$_SESSION['profilepic'];
  $user=$_SESSION['username'];

?>


  <div class="navbar">
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>

  </div><br><hr>

  
  <?php



$name="";
$dp="";

$stat="";


       $myid=$_SESSION['id'];
       $o="select * from requests where senderid=$myid and pending=1 or recid=$myid and pending=1";
       $p=mysqli_query($con, $o);
       foreach ($p as $rr) {
         $senderid=$rr['senderid'];
         $recid=$rr['recid'];
        $vidd="";
         if ($myid==$senderid) {
           $vidd=$recid;
         }
         if($myid==$recid){
          $vidd=$senderid;
        
         }
         $n="select * from tint where id=$vidd";
         $m=mysqli_query($con, $n);
         while ($o=mysqli_fetch_array($m)) {
          
           $name=$o['username'];
           $dp=$o['profilepic'];
           echo "<input type='text' value='$vidd' name='vidd' hidden>";
          echo "<table width='100%' ><tr class='row'>";
            echo "<td class='col-md-8'><h4>".ucwords($name)."</h4><div id='stat'></div></td>";
            echo "<td class='col-md-4'><div class='start_chat'><div class='btn btn-danger btn-xs start_chat' id='hkh'><a href='mes.php?id=$vidd' style='color:white; font-weight:3px; text-decoration:none;'>Start Chat</a></div></div></td>";
              echo "</tr></table>";
         }

      




}
    

    $a="select * from tint where id='$vidd'";
$b=mysqli_query($con, $a);
$time=time();
$date=strtotime(date('Y-m-d G:i:s').'-10 second');
$date=date('Y-m-d G:i:s', $date);


while ($row=mysqli_fetch_array($b)) {
  $stat=$row['status'];
  echo "$stat";
  if ($date>=$stat) {
    echo "active";
  }
}


       ?>


  

</body>
</html>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>     
  
<script>

function updtime(){
  $.ajax({
    url:"updatestatus.php",
    method:"get",
    data:{
    },
    success:function(res){
       $('#stat').html(res);
    }

  });
}  

setTimeout(updtime, 3000);

   
</script>
