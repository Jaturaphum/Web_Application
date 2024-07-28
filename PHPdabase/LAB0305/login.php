<?php
include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB0305</title>
</head>
<body>
    <form action="db_loginhashed.php" method="post">
        <h1>LAB0305</h1>
        <br>
        <input type="text" name="email" placeholder="E-mail" size="30"><br><br>
        <input type="password" name="password" placeholder="Password" size="30"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
