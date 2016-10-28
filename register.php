<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    die();
}

$reg = FALSE;
$success = "succeeded";
$failed = "failed";

$username = $_POST['username'];
$password = $_POST['password'];

$mhost = "localhost";
$muser = "phpuser";
$mpass = "lamp";
$mdb = "server";

$conn = new mysqli($mhost, $muser, $mpass, $mdb);

if ($conn->connection_error) {
    die("Connection refused: " . $conn->connection_error);
}

$result = $conn->query(
        "SELECT * FROM users WHERE username='"
        . $username
        . "' AND password='"
        . $password
        . "';"
    );

if ($result->num_rows == 0 and $conn->query(
    "INSERT INTO users VALUES ('"
    . $username
    . "', '"
    . $password
    . "');"
    )) {
    $conn->close();
    $reg = TRUE;
    }
?>
<html>
    <body>
        <p>Registration <?=($reg == TRUE) ? $success : $failed?>.</p>
        <p>Return to <a href="index.php">login</a></p>
    </body>
</html>
