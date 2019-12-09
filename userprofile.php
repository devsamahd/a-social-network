<?php  include('validator.php'); include('mysqlicon.php'); include('mylinks.php');  ?>

<?php
$ss=session_status();
if ($ss==PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['id'])) {
	header("location:login.php");
}

?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<title>homepage</title>
</head>
<body>
<nav class="" id="nav">
    <div class="navbar bg-dark text-light" style="height: 40px; font-size: 20px; padding:0px; border-bottom: 2px solid gray" >
      <div class="navbar-brand" id='navbrand'><a href="#" class="navbar-brand"><b><div id=header><font color= gold face="magneto">.LY</div></b></a></font>
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

  <div id="phonenav" class="bg-primary" style="height: 40px;"><div class="text-light" style="font-family: magneto; text-align: center; padding-top: 10px;">VYRAL.<font color="gold">LY</font></div></div>

<?php
$c=$_SESSION['id'];

 $a="select * from tint where id=$c";
 $b=mysqli_query($con, $a);

while ($row=mysqli_fetch_array($b)) {


  $user=$_SESSION['username'];

$date=$_SESSION['date'];
 $dp=$_SESSION['profilepic'];

}

  ?>


  <div style="width: 100%; height: 150px; background-color:; " align="center"><img src="<?php echo $dp; ?>" height="210px" width="200px" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border:5px solid lightblue;">

  </div><br><br>

<div align="center"><tt><font size="40px" color="gray"><b><?=$user?></b></tt></font><a style="font-size: 40px;" href="edit.php"><i class="fa fa-edit"></i></a></div>
<div align="center">
<form class="form-row">
  <div class="col-md-6">
  <div class="form-group">
    <input type="submit" name="pro" value="GO PRO" class="btn btn-primary" style="width: 500px;" id="pro"> 
  </div></div>
   <div class="col-md-6">
  <div class="form-group">

    <?php 
      $m="select * from cv where ownerid=$c";
      $n=mysqli_query($con, $m);

      if (mysqli_num_rows($n)==0) {

    ?>
    <div class="btn btn-primary text-light" style="width: 500px;" id="cv"><a href="vyralycv.php?id=<?php echo $c?>" class="text-light" style='text-decoration: none;'> Create Your Online CV</a></div>
  <?php } 
   else{?>
    <div class="btn btn-primary text-light" style="width: 500px;" id="cv"><a href="cv.php?id=<?php echo $c?>" class="text-light"  style='text-decoration: none;'>View CV</a></div>
<?php }
  ?>




  </div></div>
</form>
</div>

<hr>

 
  <div class="row">
    <div class="col-md-3" id="friends"><h4 class="bg-dark text-light" style="border-radius: 5px; font-family: cursive; height: 40px; text-align: center; width: 100%; padding-top: 0%; border-left:2px blue;">Your Friends</h4>
       <?php
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
           echo "<div class=''><h3> <img src='$dp' style='width:80px; height:80px; border:2px solid lightgray;'><a href='publicprofile.php?id=$vidd'>"." ". strtoupper($name) ."</a></h3></div><hr>";
         }

      





       }

       ?>


    </div>




    <div class="col-md-6"><h4 class="bg-dark text-light" style="border-radius: 5px; font-family: cursive; height: 40px; text-align: center; width: 100%; padding-top: 0%; border-left:2px blue;" id="postsheader">Your posts</h4>

      <?php
$c=$_SESSION['id'];
$a="select * from tint,posts where tint.id='$c' and posts.userid='$c'";
$b=mysqli_query($con, $a);

while ($row=mysqli_fetch_array($b)) {
  
  $ppost=$row['article'];
  $photo=$row['photo'];
  $date=$row['date'];
  $user=$row['username'];
  echo "<br><div class='card' style='width:100%;' align='center'>";
  echo "<div class=card-header><h4>$user</h4></div>";
echo "<div class=card-body>";
echo "<img src='$photo' style='width:100%; height:500px;'>";
echo "</div>";
echo "<div class=card-footer align='left'>";
echo "<blockqoute><b>$user</b> $ppost</blockqoute>";

echo "</div>";
echo "</div>";
echo "<div class='footer' style='text-align:left; color:gold; font-family:magneto; font-weight:bold;'>posted on"." ".$date."</div><hr>";
}
?>


    </div>
    <div class="col-md-3"><h4 class="bg-dark text-light" style="border-radius: 5px; font-family: cursive; height: 40px; text-align: center; width: 100%; padding-top: 0%; border-left:2px blue;">Friend request(s)</h4>




      <?php


      $b=$_SESSION['id'];




      $a="select * from tint, requests where tint.id=$b and requests.recid=$b";
      $c=mysqli_query($con, $a);

      while ($row=mysqli_fetch_array($c)) {
        $senderid=$row['senderid'];
        $recid=$row['recid'];
        $pending=$row['pending'];
        $q="select * from tint where id=$senderid";
        $cc=mysqli_query($con, $q);

        while ($row=mysqli_fetch_array($cc)) {
          $myid=$_SESSION['id'];

          $sendername=$row['username'];
          $senderpic=$row['profilepic'];
          

         if ($b!=$senderid && $pending==0) {
          echo "<div style='padding-top:0;'>";
echo "<td><h4><img src='$senderpic' style='width:30px; height:30px; border-radius:50%;'>"." "."$sendername</td></h4>";
echo "<a href='acceptrequests.php?id=$senderid'>add</a>";
  echo "</div>";
  }

}





        


      }





















      ?>








    </div>
  </div>

</body>

<script>
 

 
 $(function(){
  
  $('#phonenav').hide();
//screenout

 if($(window).width()<540){
  $('#phonenav').show();

  $('#pro').css('width','100%');
  $('#cv').css('width','100%');
  $('#friends').hide();
  $('#postsheader').html('Timeline');
  $('#postsheader').css('background-color','white');
  $('#postsheader').css('color','gray');



  $('.card').css('width','100%');
  $('#nav').hide();
      $('#extb').css('padding-left','0px');
      function hmm(){
        $('#sidenav').slideUp();
      }

//screenin

      setTimeout(hmm, 3000);
    }

$('#navbrand').mouseleave(function(){
  $('#wtf').hide();
});






 })

</script>
</html>
