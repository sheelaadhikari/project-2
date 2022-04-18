
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


//login data
$name = $_POST['name'];
$password = $_POST['password'] ;



//selection query
$sql = "SELECT * FROM `user`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if(($name === $row["username"]) && ($password === $row["password"])){
        echo "welcome ".$row["username"];
        echo "<p>Your Profile</p><br>";
    echo "id: " . $row["user_id"]. "<br>Name: " . $row["username"]. "<br>Email " . $row["email"]. "<br>Phone Number:". $row["phone"]."<br>";
   
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>