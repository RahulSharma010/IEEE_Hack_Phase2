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
 $password = $_GET['password'];
 
/*$sql = "SELECT  Username, password FROM userDetails where Username='userId'";
$result = $conn->query($sql);
$duid="";
$dpw="";
if ($result->num_rows) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $duid = $row["Username"];
    $dpw = $row["password"];
    
  }
} else {
  echo "0 results";
}
echo"$userId,$duid";
echo"<br> $password,$dpw";
if($userId == $duid && $password==$dpw){
    echo"valid User";
}
else{
    echo"Invalid";
}
*/
$userId = $_GET['userId'];
 $password = $_GET['password'];
 
$sql = "SELECT  Username, password FROM userDetails where Username='$userId'";
$result = $conn->query($sql);

$duid="";
$dpw="";
//$sql = "select Username, password  from userDetails where Username='aditya'"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);  
       
        echo"Done";
    }    
 else {
  echo "0 results";
}
foreach($row as $rows) 
              {  
                  
                   $duid=$rows['Username'];
                $dpw=$rows['password'];
              }
echo"<br> $password,$dpw";
if($userId == $duid && $password==$dpw){
    echo"valid User";
}
else{
    echo"Invalid";
}


$conn->close();
    

?>