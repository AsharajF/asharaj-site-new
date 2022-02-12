
<?php

require('mydb.php');


$name = $_POST['fullname'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$enquiry = $_POST['message'];


$rand=rand();
$_SESSION['rand']=$rand;
session_start();

$table="CREATE TABLE IF NOT EXISTS enquiry_tb(
name varchar(40) not null,
mobile varchar(13) not null,
email varchar(20) not null,
enquiry_details varchar(300) not null
)";

// $addId = "ALTER TABLE `enquiry_tb` ADD `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, ADD INDEX (`id`)";

if(mysqli_query($conn, $table)){
  echo"";
}else {
  echo "Error: " . $table . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO enquiry_tb (name, mobile, email,enquiry_details)
VALUES ('$name','$mobile','$email','$enquiry')";

if (mysqli_query($conn, $sql)) {
  echo "<br><h2>Thank you we will get back to you!</h2>
  <br><button style='padding :0.5rem;background:rgb(0, 164, 214);border:none;'><a style='text-decoration:none;color:white;font-size:0.8rem; font-weight:bold; ' href='./contact.html'>Go Back</a></button>
  <script>alert('Your form has been submitted successfully!')</script>
  ";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
     

mysqli_close($conn);

session_abort();


// header('Location:contact.html');

// exit;
// header('Location: '.$_SERVER['PHP_SELF']);
// die;


?>