<?php

// $conn = new mysqli("localhost", "asharaj", "", "asharaj_db");
  
//   if ($conn->connect_error) {
//     die("ERROR: Unable to connect: " . $conn->connect_error);
//   } 

$conn = mysqli_connect('localhost','asharaj',' ','asharaj_db', 3307);

if(!$conn){
  die("something went wrong! with server connection".mysqli_connect_error());
}else{
  echo"";
}
?>