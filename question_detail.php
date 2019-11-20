<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Agri Solution</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div id="google_translate_element"></div>

                <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
                </script>

                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                      
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"><a class="nav-link" href="question_list.php">Questions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Unanswered</a></li>
                    <li class="nav-item"><a class="nav-link" href="ask_question.html">Ask a question</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Buy/Sell</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_us.html">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
                  </ul>
               
               
                </div>
              </nav>
                
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>





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

$queshead = $_GET["row"];
//$queshead = $_SESSION['queshead'];
echo '<label style ="margin-left: 330px" for="exampleFormControlTextarea1">Question Heading</label>';
echo '<div style="border: 1px solid black; width: 795px; height: 80px ;font-size: 30px;background-color: black;color:white;margin-left: 330px">'.$queshead.'</div>';

 

$result = mysqli_query($conn,"SELECT ID,quesdetail FROM Question WHERE queshead='$queshead' ");
$data = mysqli_fetch_array($result);
$_SESSION['id'] = $data['ID'];
$id =  $data['ID'];
$answer = mysqli_query($conn,"SELECT ID,ans FROM answer WHERE ID='$id' ");



echo '<label style ="margin-left: 330px" for="exampleFormControlTextarea1">Question Details</label>';

echo '<div style="border: 1px solid black; width: 795px; height: 150px ;font-size: 20px;background-color: white;color:black;margin-left: 330px">'.$data['quesdetail'].'</div>';

echo '<label style ="margin-left: 330px" for="exampleFormControlTextarea1">Answers</label>';

while($row = mysqli_fetch_array($answer))
{
echo '<div style="border: 1px solid black; width: 795px; height: 150px ;font-size: 20px;background-color: white;color:black;margin-left: 330px">'.$row['ans'].'</div>';
}


?>
         <form action="insert_answer.php" method="post">
				 
				
				  <div class="form-group" style="width: 800px ;margin-left: 330px">
				    <label for="exampleFormControlTextarea1">Answer</label>
				    <textarea class="form-control" name="ans" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				   <input type="submit" name="submit" id="submit" class=" form-submit" style="color:DodgerBlue;margin-left: 330px"  value="Submit"/>
			</form>
<!-- 
  <a style = "color:darkblue;font-weight:bold" href="insert_answer.php?data=<?php echo $data['ID']; ?>"> <?php echo $data['ID']; ?></a> -->
