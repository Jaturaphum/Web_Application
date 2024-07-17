<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action_page</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        echo "<h2> GET Data </h2>";

        $fname = ($_GET['fname']);
        $lname = ($_GET['lname']);
        

        echo "First Name: " . $fname . "<br>";
        echo "Last Name: " . $lname . "<br>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<h2> POST Data </h2>";

        $fname = ($_POST['fname']);
        $lname = ($_POST['lname']);

        echo "First Name: " . $fname . "<br>";
        echo "Last Name: " . $lname . "<br>";
    }
    ?>
</body>

</html>