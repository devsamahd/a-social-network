<?php include('mysqlicon.php'); include('mylinks.php');  ?>


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


<style type="text/css">
  thead{
    font-size: 30px;
  }
  tbody{
    font-size: 20px;
    font-family: carili;
  }
  a{
    color: inherit;
  }
  a:hover{
    text-decoration: none;
  }
</style>




<body>
	<nav class="">
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
  </nav><br>


<form>
  <div class="container">
  <input type="text" class="form-control" placeholder="search for a friend..." name='q' id='q'onkeyup="search()">
  
    <p id='result'></p>
  
</div>
</form>
<table width="100%">
  <thead>
    <tr>
    <td>People you may know</td>
    <td></td>
  </tr>
  </thead>
  <tbody>
   <?php


$uid=$_SESSION['id'];
$query="select * from tint where id!=$uid";
$connect=mysqli_query($con, $query);
while ($row=mysqli_fetch_array($connect)) {
  $uid=$_SESSION['id'];
  $id=$row['id'];
  $username=$row['username'];
  $email=$row['email'];
  $img=$row['profilepic'];

 $a="select * from requests where senderid=$id and recid=$uid or senderid=$uid and recid=$id";
$b=mysqli_query($con, $a);



if ($b->num_rows==0) {
  echo "<tr style='padding-top:0;'>";
echo "<td><img src='$img' style='width:30px; height:30px; border-radius:50%;'>"." "."<a href='publicprofile.php?id=$id' style='color:gray;'>$username</a></td>";
echo "<form method='post'><td><a href='addfriends.php?id=$id' style='color:royalblue;'>ADD FRIEND</a><td><br><br></form>";
  echo "</tr>";

}
}




?>

  </tbody>
</table>

	
	


</body>
</html>
<script>
  function search(){
  var x=$('#q').val()

  $.ajax({
    type:"GET",
    url:"searchfriends.php",
    data:{
      "q":x
    },

    success: function(rest){
      document.getElementById('result').innerHTML=rest;
    }
  });
}


</script>
