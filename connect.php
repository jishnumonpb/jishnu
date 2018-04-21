<?php
$conn = mysqli_connect("localhost","root","","onlinetaxi");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>