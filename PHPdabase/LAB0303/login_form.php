<?php
include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB0303</title>
</head>
<body>
    <form action="db_login.php" method="post">
        <br>
        <input type="text" name="email" placeholder="E-mail" size="30">
        <input type="password" name="password" placeholder="Password" size="30"><
        <input type="submit" value="Login">
    </form>
</body>
</html>
