<?php
$mysqli = new mysqli("localhost", "root", "", "mydb");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$user = "abc";

/* prepare statement */
if ($stmt = $mysqli->prepare("SELECT username, password FROM users3 WHERE username = ?")) {
    $stmt->bind_param('s', $param_username);
    $param_username = $user;
    $stmt->execute();

    /* bind variables to prepared statement */
    $stmt->bind_result($col1, $col2);

    /* fetch values */
    while ($stmt->fetch()) {
        printf("%s %s\n", $col1, $col2);
    }

    /* close statement */
    $stmt->close();
}
/* close connection */
$mysqli->close();

?>