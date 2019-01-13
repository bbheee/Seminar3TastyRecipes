<?php
include "header.php";
header( "Cache-Control: max-age=<350>");
?>
<!DOCTYPE html>
<html lang="en">
<link href="resources/css/login.css" rel="stylesheet" type="text/css">
<div class = "login">
    <form action="../../doLogout.php" method="POST">
    <h2>You have logged in!</h2>
    <button type ="submit" name="submit">Logout</button>
    </form>
</div>
</html>
