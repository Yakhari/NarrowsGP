<?php
$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "Narrows";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}
?>