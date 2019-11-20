<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start(); 
$id = $_SESSION['id'] ;
// $id = $_GET["data"];
$ans= $_POST["ans"];
// echo $id;
if($ans!="")
{
$sql = "INSERT INTO answer (ID,ans) VALUES ('$id','$ans')";

		if ($conn->query($sql) === TRUE) {
		    ?>
            <script type="text/javascript">location.href = 'question_list.php';</script>
            <?php
		} else
		 {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
?>