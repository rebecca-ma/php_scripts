<?php
session_start();
if (!isset($_SESSION['username'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $host = "localhost";
    $muser = "phpuser";
    $mpass = "lamp";
    $mdb = "server";

    $conn = new mysqli($host, $muser, $mpass, $mdb);

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
    
    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
    }
        
    $result->close();
    $conn->close();
}
header("Location: home.php");
die();
?>
