<?php

$conn = mysqli_connect("192.168.0.50","sa","sa","hos");

//$con06 = mysqli_connect("10.180.230.6","sa","sa555","dmht","7000");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  mysqli_set_charset($conn,"utf8");
 // mysqli_set_charset($con06,"utf8");
 
?>
