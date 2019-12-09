<?php

include('mysqlicon.php');


session_start();
$yourid=$_POST['yourid'];
$myid=$_SESSION['id'];
$you="";
$name="";
$mes='';



$p="select * from tint,message where senderid='$yourid' and recid='$myid' and tint.id=message.senderid or senderid='$myid'  and recid='$yourid' and tint.id=message.recid order by mesid desc";
$o=mysqli_query($con, $p);

while ($row=mysqli_fetch_array($o)) {
	$sender=$row['senderid'];
	$mes=$row['message'];
	$who='';
	$him=$row['username'];
	if ($myid==$sender) {
		$who='You';
		echo "<div class=''container style=' padding-bottom:40px; padding-top:5px; padding-left:5px;'><div style='width:200px; background-color:lightgray; color:black; font-weight:bold; border-radius:5px; padding-left:5px; padding-top:10px;  padding-bottom:10px; padding-right:5px;'>$mes</div><font size='1'>Today</font></div>";

	}
		
	else{
		echo "<div class=''container style=' padding-bottom:40px; padding-top:5px; padding-left:5px;' align='right'><div class='bg-danger' style='width:200px; background-color:; color:white; font-weight:bold; border-radius:5px; padding-left:5px; padding-top:10px;  padding-bottom:10px; padding-right:5px;'>$mes</div><font size='1'>Today</font></div>";
	}
	
}



?>
