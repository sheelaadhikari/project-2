<?php
$servername = "localhost";
$username = "admin";
$password = "zhqyC6JFx80ovFDA";
$dbname = "table";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 ?>
 <script>
   alert('error'); 
 </script>
 <?php
}
else
{
  ?>
   <script>
   alert('connected successfully'); 
 </script>
 <?php
}
?>

