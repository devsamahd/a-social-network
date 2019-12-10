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
  <style type="text/css">
    .bubble {
  position: relative;
  width: 580px;
  min-height: 65px;
  padding: 15px;
  background: #fff;
  border-radius: 10px;
  border: 1px solid #ccc;
}
.bubble:after {
  content: '';
  position: absolute;
  border-style: solid;
  border-width: 15px 15px 15px 0;
  border-color: transparent #fff;
  display: block;
  width: 0;
  z-index: 1;
  margin-top: -15px;
  left: -15px;
  top: 50%;
}
.bubble:before {
  content: '';
  position: absolute;
  border-style: solid;
  border-width: 15px 15px 15px 0;
  border-color: transparent #ccc;
  display: block;
  width: 0;
  z-index: 0;
  margin-top: -15px;
  left: -16px;
  top: 50%;
}

.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}

.nav{
  position: fixed;
}


#sidenav{
  width: 230px;
  height: 100%;
  position: fixed;
  background-color: #f5f5f5;
  padding-top: 10px;
 overflow: auto;
}
.jubotron {
  padding: 0rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

.rain-text{
  background-image: linear-gradient(to left, orange, blue, indigo, violet);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  font-size: 50px;
}

/* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
 /* visibility: hidden;*/
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
/*.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}*/

/* Add animation (fade in the popup) */
/*@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}*/

/*@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}*/
@media screen and (max-width: 800px){
  #sidenav{
    width: 100%;
    height:auto;
    position: relative;
  }

}

a{
  text-decoration: none;
  color: inherit;
}

body{
  background-color: #f5f5f5;
  font-family:'Times new roman';
}
#sidenav{
  box-shadow: 2px 2px 20px 7px #ccc;
  }
  .card{
    box-shadow: 2px 2px 20px 7px #ccc;
  }
  </style>






  
</head>








<body>
  <nav class="row  fixed-top" style="background-color: #fb860d;">
    <div class="col-md-6">
    <div class="text-light " style="height: 50px; font-size: 20px;  background-color: #fb860d;" >
      <div class="navbar-brand" id='navbrand'><a href="#" class="navbar-brand" style="color: gold; font-weight: bolder; font-family: magneto;">.LY</a>
</div>
<input type="text" name="search" style="height: 45px; border-radius: 7px; border: 1px solid lightgray; width: 300px; background-color: #f5f5f5; padding-bottom: 4px; font-family: times new roman;" placeholder="Type here to search..."> Community | Help 

</div>

    </div>
    <div class="col-md-6 navbar" style="height: 50px; font-size: 20px; background-color: #fb860d;">
     
    <a class="nav-link" href="index.php" style="color: white;">home<i class="fa fa-home"></i></a>
    
      <a class="nav-link" href="userprofile.php" style="color: white;">Profile<i class="fa fa-user"></i></a>
      
      <a class="nav-link" href="friends.php" style="color: white;">Find Friends<i class="fa fa-group"></i></a>
     
      <a class="nav-link" href="messages.php" style="color: white;">Chat<i class="fa fa-comment"></i></a>
     
  
  <a href="logout.php" class="navbar-link"><i class="fa fa-sign-out" style="color: white;"></i></a></li>

</div>
    
  </nav>

  


<div id="sidenav" align="center" style=""><br><br>
  <img src="<?php echo $_SESSION['profilepic']; ?>" style="width: 200px; height: 220px; border-radius: 50%;"><br><br>
<h4 style="color:gray; font-family: carili;" align='center'><?php echo "You're logged in as"." <br><font class='rain-text'>".$_SESSION['username']; ?></h1></font></h4><br>
<?php $dp=$_SESSION['profilepic']; ?>
<div class="jubotron">

  

  <div>
    <?php

    


    ?>
  </div>



</div></div>
  <div id="ph" class="bg-primary" style="height: 40px;"><div class="text-light" style="font-family: magneto; text-align: center; padding-top: 10px;">VYRAL.<font color="gold">LY</font></div></div>


  

</div>

  <div class="row" style="padding-top: 50px; padding-left: 250px;" id="extb">
    

    <div class="col-md-8" id="post">

      <div class="card">
        <div class="card-header">Write a post....</div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
          <textarea type="text" rows="3" class="form-control" placeholder="what are you thinking about?" name="set"></textarea>
          <div class="card-footer">
            <div class="form-group">
           <input type="submit" name="post" class="btn btn-primary"  value="Post" style="border-radius: 20px; width:120px;">
            
            <span class="btn btn-warning btn-file text-light" style="border-radius: 20px;">
    <i class="fa fa-camera"> Add photo...</i><input type="file" name="addphoto" >
</span>
 
          </div>
          </form>
          </div>
        
        
      </div></div>
      <div align="center">

      <?php


$ss="select * from tint,posts where tint.id=posts.userid order by postid desc";
$now=mysqli_query($con, $ss);
while ($row=mysqli_fetch_array($now)) {
  $art=$row['article'];
  $user=$row['username'];
  $photo=$row['photo'];
  $date=$row['date'];
  $id=$row['id'];
  $postid=$row['postid'];
  $userid=$row['userid'];

  echo "<br><div class='card' style='width:100%; border:1px solid gray;' align='left'>";
  echo "<div class=card-header style='font-family:carili; color:gray;'>Posted by <font size='6px' color='blue'><a href='publicprofile.php?id=$id' style='text-decoration:none;'>".strtoupper($user)."</a></font></div>";
echo "<div class=card-body>";
echo "<div class='row'>";
echo "<div class='col-md-2'><a class='post-avatar thumbnail' href='publicprofile.php?id=$id'><img src='$photo' width='100%' style='border:2px solid lightgray;'></a></div> <div class='col-md-10' >
        <div class='bubble' style='height:150px; width:100%;'>
          <div class='pointer' style='font-weight:bold; color:royalblue;'>$art
     </div></div> ";
     echo "</div>";

     echo "</div>";
echo "</div>";
echo "<form class='container card-footer' align='left' method='post'>";
echo "<input type='submit' class='fa fa-heart btn' name='like' value='like'>";

echo "<input type='submit' class='fa fa-heart btn' name='report' value='report'>";

echo "</form>";
echo "</div>";

?>

<div class='' style='text-align:left; color:gray; font-family:typewriter; font-weight:italic; border:0px;'><br>
  <form class='container' style='padding-left:40px;' method='post'>
<span>Add comment</span>
<input type='text' style='width:87%; border-radius:5px; border:1px solid gray;' name='commenttext' id='ct'>

<div align='right'><input type="submit" name="comment" class="btn btn-primary" value="comment" id="comment"></div>
</form></div>
<div class="comec" style="border-left: 2px solid lightgray;">
  <div style="padding-left:20px; height: ; background-color: ; font-weight: bolder;font-size: 20px; color: gray; text-align: left;">Recent Comment</div>
  <div class="recom" id="recom">
   
   
     
   
  </div>
</div>

 <br>
 

<?php
// if (isset($_POST['comment'])) {

  ?>

   <script>
    $('#comment').click(function(){
    var com=$('#ct').val();
    var user=<?php echo $userid;?>;
    var pid=<?php echo $postid;?>;
    var id=<?php echo $_SESSION['id'];?>;
     $.ajax({
      url:"comments.php",
      method:"get",
      data:{
        com:com,
        user:user,
        pid:pid,
        id:id
      },
      success:function(res){
        $('body').html(res);
      }
     });
});

    function loadcomments(){
  var pid=<?php echo $postid;?>;
  $.ajax({
    url:"loadcomments.php",
    method:"get",
    data:{
       pid:pid
    },
    success:function(res){
      $('#recom').html(res);
    }

  });
}

setTimeout(loadcomments, 1000);

 $(function(){
  $('#wtf').hide();
   $('#ph').hide();
   $('#pn').hide();
 
  $('#navbrand').mouseenter(function(){
    $('#wtf').show();

    
  });
 
 function window(){
 if($(window).width()<540){
  $('#ph').show();
  $('#pn').show();

  $('.card').css('width','100%');
  $('.navbar').hide();
      $('#extb').css('padding-left','0px');
      function hmm(){
        $('#sidenav').slideUp();
      }


      setTimeout(hmm, 3000);
    }

$('#navbrand').mouseleave(function(){
  $('#wtf').hide();
});



}




 });


   </script> 

<?php 
}


?>


</div>




</div>
      
    


    <div class="col-md-4" style="position: sticky;">
      
        
          <h4 align="center" style="font-family: Times new roman;"><b>YOUR FRIENDS</b><hr></h4>
        
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
           echo "<div class=''><h5> <img src='$dp' style='width:80px; height:80px; border:2px solid lightgray;'><b class='popup'><a href='publicprofile.php?id=$vidd'>"." ". strtoupper($name) ."</a>
</b></h5></div><hr>";

         }

      





       }

       ?>
        
    </div>

    
  </div>


<div class="bottomnav fixed-bottom bg-light" style="border-top:1px solid lightgray; text-align: center; letter-spacing: 50px; font-size: 30px; height: 50px; padding-left: 30px;" id="pn">
  <div class="">
    <a href="#post"><i class="fa fa-plus"></i></a>
    <a href="userprofile.php"><i class="fa fa-user"></i></a>
    <a href="messages.php"><i class="fa fa-comment"></i></a>
  </div>

  
</div>

</body>

</html>
