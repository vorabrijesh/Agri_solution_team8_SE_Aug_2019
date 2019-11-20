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

$head= $_POST["queshead"];
$detail= $_POST["quesdetail"];
$head_err = $detail_err = "";

    // Check if question head is empty
    if(empty(trim($_POST["queshead"]))){
        echo '<p style = "font-size: 40px;text-align: center;color:green">Please enter valid head of question.</p>';
        ?>
        <br>
           
            <button style = "font-size:20px; width:300px ; margin-left: 550px; margin-right: auto;background-color:green;height: 70px;color: white" onclick =  "window.location.href='ask_question.html';"> click here to go to previous page  </button> 
            <?php
    } 
    
    // Check if question detail is empty
    elseif(empty(trim($_POST["quesdetail"])))
    {
        
        echo '<p style = "font-size: 40px;text-align: center;color:green">Please enter valid detail of question.</p>';
        ?>
        <br>
           
            <button style = "font-size:20px; width:300px ; margin-left: 550px; margin-right: auto;background-color:green;height: 70px;color: white" onclick =  "window.location.href='ask_question.html';"> click here to go to previous page  </button> 
            <?php
    }

    if( $detail != "" && $head != "")
    {
		$sql = "INSERT INTO Question (queshead,quesdetail) VALUES ('$head','$detail')";

		if ($conn->query($sql) === TRUE) {
		    ?>
            <!-- <p style = "font-size: 40px;text-align: center;color:green">Your question has been added succesfully</p>
            <br>
           
            <button style = "font-size:20px; width:300px ; margin-left: 550px; margin-right: auto;background-color:green;height: 70px;color: white" onclick =  "window.location.href='index.html';"> click here to go to home page  </button>  -->
            <script type="text/javascript">location.href = 'question_list.php';</script>
            <?php
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

 ?>