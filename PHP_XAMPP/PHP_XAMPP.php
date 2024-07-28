<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_XAMPP</title>
</head>

<body>
    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello World!<br>";
    echo "I'm about to learm PHP!<br>";
    echo "This", "String", "Was", "made", "With multiple parameters.";
    ?>
    <br>
    <?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
    ?>
    <br>
    <?php
    $x = 5;
    $y = 10;

    function myTest()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest();
    echo $y;
    ?>
    <br>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <br>
    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.";
    ?>
    <br>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    ?>
    <br>
    <?php
    $t = 15;
    if ($t < 18) {
        echo "Have a good day!";
    }
    ?>
    <br>
    <?php
    $t = 20;
    if ($t < 18) {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
    <br>
    <?php
    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
    <br>
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>
    <br>
    <?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
    <br>
    <?php
    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
    <br>
    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43",);
    foreach ($age as $x => $val) {
    ?>
        <sting><?php echo $x; ?></sting>
        <string><?php echo $val; ?></string>
    <?php
    }
    ?>
    <br>
    <?php
    $color = "red";
    ?>
    <p>Roses are <?= $color ?></p>
    <br>
    <form action="action_page.php" target="_blank" method="post">
        Fist name: <br>
        <input type="text" name="fname"><br>
        Last Name: <br>
        <input type="text" name="lname"><br><br>
        <input type="submit" value="submit">
    </form>
    <br>    
    <form action="action_page.php" method="get">
        Fist name: <br>
        <input type="text" name="fname"><br>
        Last Name: <br>
        <input type="text" name="lname"><br><br>
        <input type="submit" value="submit">
    </form>
    <br>
    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    session_start();
    ?>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "session varibles are set.";
    ?>
</body>
</html>