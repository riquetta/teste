<?php
/*$servername = "10.243.176.70";
$username = "mysqldbuser";
$password = "LataMIveco2019!";*/

$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASS'];



// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli("mysql:host=mysql;dbname=blog", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

