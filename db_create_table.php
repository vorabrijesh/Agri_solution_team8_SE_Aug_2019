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
// $sql = "CREATE TABLE AgriUser (
// username VARCHAR(60) NOT NULL,
// email VARCHAR(30) NOT NULL,
// password VARCHAR(50) NOT NULL,
// PRIMARY KEY(username)
// )";

// // sql to create table
// $sql1 = "CREATE TABLE Question (
//  ID   INT  NOT NULL  AUTO_INCREMENT,
// queshead VARCHAR(60) NOT NULL,
// quesdetail VARCHAR(500) NOT NULL,
// PRIMARY KEY(ID)
// )";
$sql2 = "CREATE TABLE Answer (
 ID   INT  NOT NULL,
ans VARCHAR(600) NOT NULL

)";
// if ($conn->query($sql) === TRUE) {
//     echo "Table AgriUsers created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
//     echo $conn->errno;
// }
// if ($conn->query($sql1) === TRUE) {
//     echo "Table Question created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
//     echo $conn->errno;
// }
if ($conn->query($sql2) === TRUE) {
    echo "Table Answer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}
$conn->close();
?>