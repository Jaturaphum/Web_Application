<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB0301</title>
</head>
<body>
    <h2>GET</h2>
    <form action="calulator.php" method="get">
    Quiz: <input type="text" name="quiz"><br><br>
    Midterm: <input type="text" name="midterm"><br><br>
    Final: <input type="text" name="final"><br><br>
    <input type="submit" value="Submit">
    </form>
    <h2>POST</h2>
    <form action="calulator.php" target="_blank" method="post">
    Quiz: <input type="text" name="quiz"><br><br>
    Midterm: <input type="text" name="midterm"><br><br>
    Final: <input type="text" name="final"><br><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>