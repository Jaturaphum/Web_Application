<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDSESSION</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['number'])) {
        $_SESSION['number']++;
    } else {
        $_SESSION['number'] = 0;
    }
    echo "Current number:" . $_SESSION['number'];
    ?>
</body>
</html>