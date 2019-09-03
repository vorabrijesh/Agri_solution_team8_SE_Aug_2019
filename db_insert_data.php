<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name11= $_POST["username"];
$email11= $_POST["email"];
$password11= $_POST["password"];
$password21= $_POST["re_password"];

if($password11 !== $password21 )
{
	echo "entered passwords did not match";
}
// $checkbox1=$_POST["agree-term"];
else
{
	$sql = "INSERT INTO AgriUser (username,email,password) VALUES ('$name11','$email11','$password11')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>