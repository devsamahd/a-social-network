<?php

  $h="update tint set status=now() where id=".$_SESSION['id'];
  $r=mysqli_query($con, $h);
  if ($r) {
    echo "ror";
  }
  

?>