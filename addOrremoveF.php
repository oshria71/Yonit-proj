<?php

session_start();
//signgup
$servername = "182.50.133.168";
$username = "studDB19a";
$password = "stud19DB1!";
$dbname = "studDB19a";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//need to check if this is already mark as 
//faviorate if it is need to remove from table else add to the table

$conn->close();

?>