<?php  include('validator.php'); include('mysqlicon.php'); include('mylinks.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<?php session_start();?>
	<title>edit</title>
</head>
<body>
	<div></div>

	<form method="post" enctype="multipart/form-data">
<input type="file" name="profilepic" class="form-control"><br>
		<input type="text" name="username" placeholder="enter new username" class="form-control"><br>
		<div align="center"><input type="submit" name="edit" value="EDIT" class="btn btn-primary">&nbsp;<input type="submit" name="delete" value="DELETE ACCOUNT" class="btn btn-primary"></div><br>


	</form>

</body>
</html>
<?php
if (isset($_POST['edit'])) {

	
	$imgfolder="images/";
	$imagepath=$imgfolder.basename($_FILES['profilepic']['name']);
	$imgext=pathinfo($imagepath,PATHINFO_EXTENSION);
	$imgsize=$_FILES['profilepic']['size'];
	$imgtmpname=$_FILES['profilepic']['tmp_name'];

	if ($imgext!="PNG" && $imgext!="JPG" && $imgext!="JPEG" && $imgext!="GIF") {
		$ms="file type not supported";
	}

	else{
		$upload=move_uploaded_file($imgtmpname, $imagepath);

		if ($upload) {
			
		

	
	$id=$_SESSION['id'];
	$username=$_POST['username'];
	$pic=$imagepath;

	$q="update tint set username='$username', profilepic='$pic' where id='$id' ";
	$edt=mysqli_query($con, $q);
	if ($edt) {
		$o="select * from tint where id=$id";
		$m=mysqli_query($con, $o);
		while ($row=mysqli_fetch_array($m)) {
			$_SESSION['profilepic']=$row['profilepic'];
			$_SESSION['username']=$row['username'];
			header('location:userprofile.php');
		}
		
	}
	
}

}}
if (isset($_POST['delete'])) {
	

	$id=$_SESSION['id'];
	$qo="delete from tint where id=$id";
	$do=mysqli_query($con, $qo);
	if ($do) {
		$query="delete from posts where userid=$id";
		$run=mysqli_query($con, $query);
		if ($run) {
			$a="delete from message where recid=$id or senderid=$id";
			$b=mysqli_query($con,$a);
			if ($b) {
				session_destroy();
			header("location:login.php");
			}
			
		}
	}
	
		
	}





?>