<?php include("mylinks.php"); include("mysqlicon.php"); $passedid=$_GET['id'];
$n="select * from cv where ownerid=$passedid";
$q=mysqli_query($con, $n);
$cvname="";
while ($row=mysqli_fetch_array($q)) {
	$cvname=$row['fullname'];
	$skill1=$row['skill1'];
	$skill2=$row['skill2'];
	$skill3=$row['skill3'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
	<title> page</title>
</head>
<script type="text/javascript">
	var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};
 
TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];
 
  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
 
  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
 
  var that = this;
  var delta = 300 - Math.random() * 100;
 
  if (this.isDeleting) { delta /= 2; }
 
  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }
 
  setTimeout(function() {
    that.tick();
  }, delta);
};
 
window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<style>

<?php $img=''; ?>
	.topinfo{
		width: 100%;
		height: 250px;
		background-image: url("<?php echo 'img2.jpg';?>");
		background-repeat: no-repeat;
		background-size: cover;
		background-color: lightblue;
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-bottom: 2px solid gray;
		box-shadow: 2px 3px 4px 4px gold;

	}
	.pen {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
  height: 70%;
}
.text {
	padding-top: 50px;
  color: white;
  font-family: 'Roboto';
  text-align: center;
  font-size: 60px;
}

	



</style>
<body>
	<nav>
		<div class="navbar navbar-inverse bg-dark text-light" style="height: 50px;">
			<div class="navbar-brand" style="font-family: magneto; padding-top: 0px;"><h1>Vyral<font color="gold">.CV</font></h1></div>
			
			<div class="navbar-nav text-light"></div>
			<div class="navbar-nav"></div>
			<div class="navbar-nav"></div>
		</div>
	</nav>

	<?php
$id=$_GET['id'];
	$a="select * from tint  where id=$id";
	$b=mysqli_query($con, $a);

	while ($row=mysqli_fetch_array($b)) {
		$name= $row['username'];
		$dp=$row['profilepic'];

	}

	?>
<div class="topinfo"><div id="section1" class="container-fluid">
  
   <section class="pen">
<h1 class="text">
  <span
     class="txt-rotate"
     data-period="1000"
     data-rotate='["My name is <?php echo $cvname; ?>", "I am good at the following...", "<?php echo $skill1 ?>", "<?php echo $skill2 ?>","<?php echo $skill3; ?>"]'></span>
</h1>
</section>
</div>

<div class="row" style="padding-top: 110px;">
<div class="col-md-4">
	<h1>ABOUT ME</h1>
	
	<div class="container" align="center"><img src="<?php echo $dp; ?>" style="width: 50%; height: 200px; border-radius: 50%;"></div>
	<h3 style="text-align: center;"><font color="gray"><?php echo "<a href='userprofile.php?id='$passedid' style='color:inherit; text-decoration:none;'>".$name."</a>"; ?></font></h3>
	<hr>





<!-- message fromcv -->
	<form>
	<div class="form-group"><input type="text" name="msgfromcv" class="form-control"></div>
	<div align="center" class="form-group"><input type="submit" name="sendmsgfromcv" class="btn btn-warning text-light" style="border: 2px solid gray;" value="send message"></div>

</form>
















</div>
<div class="col-md-4">
	<h1>My DOCUMENTS</h1>

	
</div>
<div class="col-md-4">
	<h1>WORK EXPERIENCE</h1>

	
</div>
</div>
</body>
</html>