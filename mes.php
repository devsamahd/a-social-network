<?php include('mylinks.php'); include('mysqlicon.php'); 

 


?>
<!DOCTYPE html>
<html>
<style type="text/css">

	
	#container{
		width: 100%;
      height: 180px;
	}
	img{
	  width: 150px;
	  height: 200px;
	  border: 1px solid lightgray;

	}
	
	.mmm{
		font-weight: bolder;
	}
	body{
		overflow-y: hidden;
		overflow-x: hidden;
	}

#messages{
	padding-bottom: 200px;
	overflow-y: auto;
	height: 530px;
}

</style>

<head>
	
	<title></title>
</head>
<body>
<?php

session_start(); 
 $yourname='';
$yourdp='';

$yourid=$_GET['id'];
$myid=$_SESSION['id'];
$con=mysqli_connect('localhost','root','','samahd');
$a="select * from tint where id='$myid'";
$b=mysqli_query($con, $a);


while ($row=mysqli_fetch_array($b)) {
	$yourname=$row['username'];
	$yourdp=$row['profilepic'];
	
}

?>

	
		<div class=" bg-danger text-light" align="center" style="height: 50px; font-size: 40px; font-weight: bold;">
			<div id="name"><?php echo $yourname; ?></div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
			<div class="messages" id="messages">
				
			</div>


			</div>

			
		<div class="col-md-3"></div>

		</div>

		<div class="row fixed-bottom">
			<div class="col-md-3"><div></div></div>
			<div class="col-md-6 ">
				<!-- send message -->
			<div class="" align="center">
				<form method="post">
					<input type="text" name="message-text" id="message-text" style="width: 80%; height: 40px; border-radius: 5px; border:1px solid lightgray;">
					<span align="right">
						
						<button  class="btn" id="send" name="sendmessage" style="font-size: 30px; color: gray;"><i class="fa fa-paper-plane-o"></i></button></span>
				</form>
			</div>
			</div>
		</div>
	</div>

	
</body>
</html>

<?php
if (isset($_POST['sendmessage'])) {
	$mes=$_POST['message-text'];
	
    
	
	
	$myid=$_SESSION['id'];
$yourid=$_GET['id'];

	$a="Insert into message values('','$myid','$yourid','$mes')";
    $b=mysqli_query($con, $a);

}

?>




<script>
  
 
 var yourid='<?php echo $yourid ;?>';
 
  $(function(){
    function call(){
  	$.ajax({
  		url:"sendmessage.php",
  		method:"post",
  		data:{
           yourid:yourid,
  		},
  		success:function(res){
  			$('#messages').html(res);
  		}
  	});
}

setInterval(call,2000);
  })
	
	
  
</script>