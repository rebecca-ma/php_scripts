<?php
session_start();
if (isset($_SESSION['username'])) {
    session_unset();
}
?>
<html>
    <body>
        <p>You've been logged out.</p>
        <p>Return <a href="index.php">home</a>.</p>
    </body>
</html>
