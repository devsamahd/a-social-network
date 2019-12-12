<?php
include("mysqlicon.php");
include("mylinks.php");

if (isset($_GET['q'])) {

	
$q=$_GET['q'];

$f="select * from tint where username like '%$q%'";
$m=mysqli_query($con, $f);
$res=$m->num_rows;
if ($q=='') {
	
}
elseif ($m->num_rows==0) {
	echo "<div style='color:gray;''>no match found</div>";
}

else{

	if ($res==1) {
		echo "<div style='color:gray;''>1 match found<div>";
		while ($row=mysqli_fetch_array($m)) {
		$img=$row['profilepic'];
		$id=$row['id'];
		$username=$row['username'];
		echo "<br><tr style='padding-top:0;'>";
echo "<td><img src='$img' style='width:30px; height:30px; border-radius:50%;'>"." "."<a href='publicprofile.php?id=$id' style='color:gray;'>$username</a></td>";

  echo "</tr><br>";
	}
	}
	else{
		echo $res." matches found<br>";
		while ($row=mysqli_fetch_array($m)) {
		$img=$row['profilepic'];
		$id=$row['id'];
		$username=$row['username'];
		echo "<br><tr style='padding-top:0;'>";
echo "<td><img src='$img' style='width:30px; height:30px; border-radius:50%;'>"." "."<a href='publicprofile.php?id=$id' style='color:gray;'>$username</a></td>";

  echo "</tr><br>";
	}
	}

	


}
}
?>