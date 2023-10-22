<?php
$servername = "localhost";
$username = "id21219595_tat";
$password = "Kirti@123";
$db="id21219595_kirti";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $userId = $_GET['userId'];
 $ph = $_GET['ph'];
 $adr = $_GET['adr'];
 $password = $_GET['password'];
 
    
$sql = "INSERT INTO userDetails (address, password,phone_number,Username)
VALUES ('$adr', '$password', '$ph','$userId')";
if ($conn->query($sql) === TRUE) {
  echo "<h1>New record created successfully <br>";
  echo "<a href='login.html'>Login Here</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
    

?>