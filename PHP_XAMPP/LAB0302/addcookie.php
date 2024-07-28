<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDCOOKIE</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['number'])) {
        echo "Cookie is already set <br>";
        setcookie('Number',$_COOKIE['Number']+=1, time() + (86400 * 3));
    } else {
        echo "Cookie is not set <br>";
        setcookie('Number',0,time() + (86400 * 3));
    }
    echo "Current number:" . $_COOKIE['Number'];
    ?>
</body>
</html>