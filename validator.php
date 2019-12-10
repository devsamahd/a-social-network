<?php include('mysqlicon.php'); include('mylinks.php');  ?>
<?php
$defimg="images/img1.jpg";
$error="";

if (isset($_POST['signup'])) {
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$secretpassword=md5($password);
	
	$currenttime=strtotime(date('Y-m-d H:i:s'));
	$date=date('Y-m-d h:i:s', $currenttime);
	
	$profilepic=$defimg;
	$status="";



   $sql="select * from tint where email='$email'";
   $found=mysqli_query($con,$sql);
    
    
	 if ($password!=$confirmpassword) {
		$error= "passwords do not match";
	}
	elseif ($password=='') {
		echo "please enter a password";
	}
	elseif (strlen($password)<8 || strlen($password)>15) {
	    $error="password should be between 8 to 15 characters";
	}
	elseif (mysqli_num_rows($found)==1) {
		$error="Email has been taken, please choose another email";
	}
	else{
		$query="insert into tint values('','$firstname', '$lastname', '$username', '$email', '$secretpassword','$date','$profilepic','$status')";
		$connect=mysqli_query($con,$query);
		if ($connect) {
			session_start();
			$id=$_SESSION['id'];
			header("location:index.php");
		}
	}
}




if (isset($_POST['login'])) {
	$lemail=$_POST['lemail'];
	$lpassword=md5($_POST['lpassword']);

	$sql="select * from tint where email='$lemail' and password='$lpassword'";
	
	$query=mysqli_query($con, $sql);
   
    

	
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$email=$row['email'];
			$username=$row['username'];
			$dp=$row['profilepic'];
		}

		if ($query->num_rows==0) {
			$error="Incorrect email or password";
		}
		else{
						$cookie=$_POST['rememberme'];
			if ($cookie==1) {
			setcookie("lusername",$username,time()+86400);
			
		}
			session_start();
			$_SESSION['id']= $id;
			$_SESSION['email']=$email;
			$_SESSION['username']=$username;
			$_SESSION['date']=$date;
			$_SESSION['profilepic']=$dp;
			$_SESSION['secretpassword']=$password;

			header("location: index.php");	
																																										
		}
		
	}


  

























if (isset($_POST['post'])) {
	session_start();

	$set=$_POST['set'];
	
	$date=date("d-m-y, h-m-s");
	
		
	
	$userid=$_SESSION['id'];
	$imgfolder="images/";
	$imagepath=$imgfolder.basename($_FILES['addphoto']['name']);
	$imgext=pathinfo($imagepath,PATHINFO_EXTENSION);
	$imgsize=$_FILES['addphoto']['size'];
	$imgtmpname=$_FILES['addphoto']['tmp_name'];

	if ($imgext!="PNG" && $imgext!="JPG" && $imgext!="JPEG" && $imgext!="GIF") {
		$ms="file type not supported";
	}
	elseif ($article='') {
		$mss="article empty";
	}
	else{
		$upload=move_uploaded_file($imgtmpname, $imagepath);

		$db="insert into posts values('','$set','$userid','$imagepath','$date')";
		$upd=mysqli_query($con, $db);
		if ($upd) {
			echo "<div class='bg-success text-light'>Post successful</div>";
		}
		else{
			echo mysqli_error();
		}
		
	}


}







?>
