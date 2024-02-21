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
// Sql query
$sql = "SELECT * FROM `information`WHERE `City`= 'Delhi'";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num = mysqli_num_rows($result);
echo "Total $num records are found in DB";
echo "<br>";
// Display the data returned by the sql query from DB
while($row = mysqli_fetch_assoc($result)){
  echo $row['Sno'] . $row['Name'] . $row['Phoneno'] . $row['City'];
  echo "<br>";
}
?>
