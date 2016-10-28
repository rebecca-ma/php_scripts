<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    die();
}
?>
<html>
    <body>
        <h1>Welcome, <?=$_SESSION['username']?>!</h1>
        <form action="logout.php" method="get">
            <input type="submit" value="Logout">
        </form>
    </body>
</html>
