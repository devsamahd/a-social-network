<?php  include('validator.php'); include('mysqlicon.php'); include('mylinks.php');  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="a.css">

</head>
<!-- style -->


<style type="text/css">
	#signupbtn{
		width: 300px;
	}
	#signupbtn:hover{
		background-color: blue;

	}
	body{
		font-family: carili;
		background-color: white;		
	}
	#label{
		
		color:gray;
	}
	#header{
		text-align: center;
		font-size: 50px;
		font-weight: bold;
	}
	#link{
		text-align: center;
	}
	a{
		text-decoration: none;
	}
	@font-face {
  font-family: magneto;
  src: url(MAGNETOB.ttf);
}
@keyframes colorchange{
	0% {background-color: red;}
	20% {background-color: green;}
	40% {background-color: orange;}
	60% {background-color: lightgreen;}
	80% {background-color: pink;}
	100% {background-color: cyan;}
}
</style>






<!-- /style -->
<body>
	

	<form class="container" style="padding-top: 1%;" method="post">
		<h1 style="text-align: center; color:blue;font-size: 100px;"><font face="magneto">vyral.</font><font face="magneto" color="gold" style="border:2px solid cyan; background-color: royalblue; text-shadow: 5px 2px 4px gray; animation-name: colorchange; animation-duration: 10s; animation-timing-function: ease-in-out; animation-iteration-count: infinite; animation-direction: reverse;">ly</font></h1>
		<div id="label"><h3>NAME:</h3></div>
		<div class="form-group">
			<div class="form-row">
				<div class="col-md-6"><input type="text" name="firstname" class="form-control" placeholder="Enter your first name" required></div>
				
			
				<div class="col-md-6"><input type="text" name="lastname" class="form-control" placeholder="Enter your last name" required></div>
			</div>	
		</div>
			<div class="form-group">
				<div class="form-row">
				<div class="col-md-6"><input type="text" name="username" class="form-control" placeholder="Enter your preferred username" required></div>
				<div class="col-md-6"><input type="text" name="email" class="form-control" placeholder="Enter your email" required></div>
				
			</div>
		</div>
		<div id="label"><h3>SET PASSWORD:</h3></div>
			<div class="form-group">
				<div class="form-row">
				<div class="col-md-6"><input type="password" name="password" class="form-control" placeholder="Enter password" required></div>
				<div class="col-md-6"><input type="password" name="confirmpassword" class="form-control" placeholder="confirm password" required></div>
				
			</div>
		</div>
		<div class="bg-warning text-light"><?php echo $error;?></div>
		<div class="form-group" align="center">
			<input type="submit" name="signup" value="Signup" class="btn btn-primary" id="signupbtn">
		</div>
	</form>
	<div id=link><a href="login.php">LOGIN HERE</a></div>
	<div id=tac class="row"><a href="tac.php" class="col-md-6">Terms&Conditions</a><a href="#" class="col-md-6" style="text-align: right;">All rights reserved&copy; 2019.</a></div>


</body>
</html>