<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "efarming";
$name= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$sub= $_POST['subject'];
$message= $_POST['message'];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO contact (name,phone,email,subject,message)
VALUES('$name','$phone','$email','$sub','$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

