<?php
//connection to DB
$servername="localhost";
$username="root";
$password="";
$database="shivansh_24";
// creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
//if connection was not successful
if(!$conn){
    die("Failed to connect" . mysqli_connect_error());
}else{
     echo "Connection was successful";
}
echo "<br>";
// Create a table in the DB
$sql = "CREATE TABLE `Information` ( `Sno` INT(50) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(100) NOT NULL , `Phoneno` VARCHAR(100) NOT NULL , `City` VARCHAR(100) NOT NULL , PRIMARY KEY (`sno`))" ;
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because". mysqli_error($conn);
}
?>