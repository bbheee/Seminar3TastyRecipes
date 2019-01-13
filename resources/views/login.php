<?php
include "header.php";
header( "Cache-Control: max-age=<350>");
?>

<!DOCTYPE html>
<html lang="en">

<link href="resources/css/login.css" rel="stylesheet" type="text/css">

        <div class = "login">
            <form action="../../doLogin.php" method="POST">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="submit">Login</button>
            </form>
            <a href="../../showSignup.php">Sign up here!</a>
        </div>

</html>
