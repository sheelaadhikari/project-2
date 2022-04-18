<?php
$servername = "localhost";
$username = "user";
$password = "tpa!_/_oxY)hwZBa";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$phone = $_POST['phone'];



 $sql = "INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `phone`) VALUES (NULL, '$name','$pwd', '$email','$phone');";

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>