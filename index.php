<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: home.php");
    die();
}
?>
<html>
    <body>
        <h1>Login<h1/>
        <form action="login.php" method="post">
            <input name="username" type="text" value="Username">
            <input name="password" type="password" value="Password">
            <input type="submit" value="Login">
        </form>
        <h1>Register</h1>
        <form action="register.php" method="post">
            <input name="username" type="text" value="Username">
            <input name="password" type="password" value="Password">
            <input type="submit" value="Register">
        </form>
    </body>
</html>
