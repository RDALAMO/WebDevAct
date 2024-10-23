<?php
// Create connection
$con=mysqli_connect("localhost","root","","crud_Operations");

// Check connection
if ($con)
  {
    // echo "Connected";
  }else{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>