<?php
// Connecting to the DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "shivansh_24";
// Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// if connection was not successful
if (!$conn){
    die("Failed to connect". mysqli_connect_error());
}else{
    echo "Connection was successful";
}
echo "<br>";
$sql = "SELECT * FROM `information`";
$result = mysqli_query($conn, $sql);
// Using WHERE to delete the data
$sql = "DELETE FROM `information` WHERE `Sno` = 5";
$result = mysqli_query($conn, $sql);
if($result){
  echo "Deleted data successfully";
}
else{
  echo "Failed to delete data";
}
?>