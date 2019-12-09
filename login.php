<?php  include('validator.php'); include('mysqlicon.php'); include('mylinks.php');  
if (isset($_SESSION['id'])) {
	header("location:index.php");
}
?>

<script>

	$(function(){
		$('#break').hide();
		if ($(window).width()<800) {
			$('#break').show();
		}
	})
	
</script>



<style type="text/css">
	#signupbtn{
		width: 300px;
	}
	#signupbtn:hover{
		background-color: blue;

	}
	body{
		font-family: carili;
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
	@keyframes colorchange{
	0% {background-color: red;}
	20% {background-color: magenta;}
	40% {background-color: orange;}
	60% {background-color: lightgreen;}
	80% {background-color: pink;}
	100% {background-color: cyan;}
}
	
</style>






<!-- /style -->
<body>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<form class="container" style="padding-top: 1%;" method="post">
		<h1 style="text-align: center; color:blue;font-size: 100px;"><font face="magneto">vyral.</font><font face="magneto" color="gold" style="border:2px solid cyan; background-color: royalblue; text-shadow: 5px 2px 4px gray; animation-name: colorchange; animation-duration: 10s; animation-timing-function: ease-in-out; animation-iteration-count: infinite; animation-direction: reverse;">ly</font></h1>
		<div id="label"><h3>LOGIN:</h3></div>
		<div class="form-group">
			<div class="form-row">
				<div class="col-md-6"><input type="text" name="lemail" class="form-control" placeholder="Enter your Email" value="<?php echo isset($_POST['login']) ? $_POST['lemail']:''
				?>"></div>


				<span id="break"><br><br><br></span>
				
			
				<div class="col-md-6"><input type="password" name="lpassword" class="form-control" placeholder="Enter your password"></div>
			</div>	
		</div><div class="bg-warning text-light">
		<?php echo $error;?></div>
			<div class="form-group">
				<input type="checkbox" name="rememberme" value="1">Remember me
				
			</div>
		
		<div class="form-group" align="center">
			<input type="submit" name="login" value="Login" class="btn btn-primary" id="signupbtn">
		</div>
	</form>
	<div id=link><a href="signup.php">SIGNUP HERE</a></div>
	<div id=tac class="row"><a href="tac.php" class="col-md-6">Terms&Conditions</a><a href="#" class="col-md-6" style="text-align: right;">All rights reserved&copy; 2019.</a></div>
