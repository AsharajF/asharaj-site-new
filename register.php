<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/redlogo.jpg">


  <title>Thank you for submitting</title>

</head>
<body>
       <div style="display:flex;
       flex-direction:column;
       align-items:center;">
         <img src="img/check-circle.gif" alt="check-circle gif">
         <h2 style="font-family: 'Signika Negative', sans-serif;text-align:center;">Thank you for submitting. we will get back to you</h2><br>
          <a href="index.php#nav" class="back-btn"
          style="background-color:black;color:white;padding:10px;text-decoration:none;font-family: 'Signika Negative', sans-serif;">back to home</a>
       </div>
       
</body>
</html> -->


<?php

require('mydb.php');

$name=$_POST['name'];
$course=$_POST['course'];
$year=$_POST['yop'];
$last_clg=$_POST['school'];
$mobile=$_POST['phone'];
$email=$_POST['email'];
$enquiry=$_POST['message'];

session_start();

$table="CREATE TABLE IF NOT EXISTS registered_students (
name varchar(40) not null,
course varchar(50) not null,
yop varchar(5) not null,
last_college varchar(50) not null,
mobile varchar(13) not null,
email varchar(20) not null,
enquiry_details varchar(100) not null
)";

if(mysqli_query($conn,$table)){
  echo"";
}else {
  echo "Error: " . $table . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO registered_students (name, course,yop,last_college,mobile,email,enquiry_details)
VALUES ('$name','$course','$year','$last_clg','$mobile','$email','$enquiry')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
     
mysqli_close($conn);

session_abort();

echo "Thank you for registering to us!<br>";
echo "<br><button><a style='text-decoration:none;color:black;font-size:12px;font-weight:bold;' href='./index.html#nav'>Back to Home</a></button>"






?>
