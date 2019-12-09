<!DOCTYPE html>
<?php include("mylinks.php"); include('mysqlicon.php')?>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
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
		</style>



<body style="text-align: center; padding-top: 100px; ">
	
		<div class="" style="font-family: magneto; padding-top: 0px; font-size: 80px;">Vyral<font color="gold">.CV</font></div>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<h1 align="left" style="color:gray;"> Skills:</h1>
			<div class="form-row">
				<div class="col-md-6" align="right"><input type="text" name="name" class="form-control" style="width: 80%;" placeholder="Enter your fullname please" required>
</div >
				<div class="col-md-6"><input type="text" name="skill1" class="form-control" style="width: 80%;" placeholder="Enter a skill *required" required><div class="form-group"><span class="btn btn-warning btn-file text-light" ><h5>Attach Cert</h5><input type="file" name="addcert" id="addcert"></span></div></div>
			</div>
		</div>


		<div class="form-group">
			<div class="form-row">
				<div class="col-md-6" align="right"><input type="text" name="skill2" class="form-control" style="width: 80%;" placeholder="Enter a skill *Optional"><div class="form-group"><span class="btn btn-warning btn-file text-light" ><h5>Attach Cert</h5><input type="file" name="addcert2"></span></div></div >
				<div class="col-md-6"><input type="text" name="skill3" class="form-control" style="width: 80%;" placeholder="Enter a skill *Optional"><div class="form-group"><span class="btn btn-warning btn-file text-light" ><h5>Attach Cert</h5><input type="file" name="addcert3"></span></div></div>
			</div>
		</div>
		

        <input type="submit" name="po" class="btn btn-dark" value="Go Vyral" style="border:2px solid gold;">

			</div>
		</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['po'])) {
	$fullname=$_POST['name'];
	$skill1=$_POST['skill1'];
	
	$skill2=$_POST['skill2'];
	
	$skill3=$_POST['skill3'];
	



$userid=$_SESSION['id'];
	$imgfolder="certs/";
	$imagepath=$imgfolder.basename($_FILES['addcert']['name']);
	$imgext=pathinfo($imagepath,PATHINFO_EXTENSION);
	$imgsize=$_FILES['addcert']['size'];
	$imgtmpname=$_FILES['addcert']['tmp_name'];

	//cert2
	$imgfolder2="certs/";
	$imagepath2=$imgfolder2.basename($_FILES['addcert2']['name']);
	$imgext2=pathinfo($imagepath2,PATHINFO_EXTENSION);
	$imgsize2=$_FILES['addcert2']['size'];
	$imgtmpname2=$_FILES['addcert2']['tmp_name'];

	//cert3
	$imgfolder3="certs/";
	$imagepath3=$imgfolder3.basename($_FILES['addcert3']['name']);
	$imgext3=pathinfo($imagepath3,PATHINFO_EXTENSION);
	$imgsize3=$_FILES['addcert3']['size'];
	$imgtmpname3=$_FILES['addcert3']['tmp_name'];

	if ($imgext!="PNG" && $imgext!="JPG" && $imgext!="JPEG" && $imgext!="GIF") {
		$ms="file type not supported";
	}
	elseif ($article='') {
		$mss="article empty";
	}
	else{
		$upload=move_uploaded_file($imgtmpname, $imagepath);
		$upload2=move_uploaded_file($imgtmpname2, $imagepath2);
        $upload3=move_uploaded_file($imgtmpname3, $imagepath3);



		if ($upload) {
			$c="insert into cv values('','$fullname','$skill1','$imagepath','$skill2','$imagepath2','$skill3','$imagepath3','$userid')";
			$d=mysqli_query($con, $c);
			header("location:cv.php?id=$userid");
		}
		
	}
}
?>