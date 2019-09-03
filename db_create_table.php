<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE AgriUser (
username VARCHAR(60) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
PRIMARY KEY(username)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table AgriUsers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}

$conn->close();
?>