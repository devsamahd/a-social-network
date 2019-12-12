<?php
include("mysqlicon.php");
include("mylinks.php");
$id=$_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<title>homepage</title>
</head>
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
  </nav>

<?php
$c=$_GET['id'];

 $a="select * from tint where id=$c";
 $b=mysqli_query($con, $a);

while ($row=mysqli_fetch_array($b)) {


  $user=$row['username'];

$date=$row['date'];
 $dp=$row['profilepic'];

}

  ?>


  <div style="width: 100%; height: 150px; background-color:; " align="center"><img src="<?php echo $dp; ?>" height="210px" width="200px" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border:5px solid lightblue;">

  </div><br><br>

<div align="center"><tt><font size="40px" color="gray"><b><?php echo $user ?><a href="delete.php?id=<?php echo $id?>"><div class="fa fa-trash"></div></a></b></tt></font></div>
<div align="center">
<form method="post">
  
  <div class="form-group">
    <input type="submit" name="message" value="Start Chat" class="btn btn-primary" style="width: 500px;"> 
  </div>
  <?php
    if (isset($_POST['message'])) {
      header("location:mes.php?id=$c");
    }
  ?>
   
</form>
</div>

<hr>

 
  <div class="row">
    <div class="col-md-4"><h4 class="bg-dark text-light" style="border-radius: 5px; font-family: cursive; height: 40px; text-align: center; width: 100%; padding-top: 0%; border-left:2px blue;">Friends</h4>


    </div>




    <div class="col-md-8"><h4 class="bg-dark text-light" style="border-radius: 5px; font-family: cursive; height: 40px; text-align: center; width: 100%; padding-top: 0%; border-left:2px blue;">Posts</h4>

      <?php
$c=$_GET['id'];
$a="select * from tint,posts where tint.id='$c' and posts.userid='$c'";
$b=mysqli_query($con, $a);

while ($row=mysqli_fetch_array($b)) {
  
  $ppost=$row['article'];
  $photo=$row['photo'];
  $date=$row['date'];
  $user=$row['username'];
  echo "<br><div class='card' style='width:70%;' align='center'>";
  echo "<div class=card-header><h4>$user</h4></div>";
echo "<div class=card-body>";
echo "<img src='$photo' style='width:100%; length:100%;'>";
echo "</div>";
echo "<div class=card-footer align='left'>";
echo "<blockqoute><b>$user</b> $ppost</blockqoute>";

echo "</div>";
echo "</div>";
echo "<div class='footer' style='text-align:left; color:gold; font-family:magneto; font-weight:bold;'>posted on"." ".$date."</div><hr>";
}
?>


    </div>
    







    </div>
  </div>

</body>
</html>