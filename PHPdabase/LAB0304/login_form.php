<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB0303</title>
</head>
<body>
<form action="function_hash_pwd.php" method="POST">
        <input type="text" name="email" placeholder="E-mail" size="30"><br>
        <input type="text" name="password" size="30"placeholder="Password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>
