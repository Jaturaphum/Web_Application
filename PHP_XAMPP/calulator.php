<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calulator</title>
</head>

<style>
    html,body {
        display: ruby;
    }
</style>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $quiz = ($_GET['quiz']);
        $midterm = ($_GET['midterm']);
        $final = ($_GET['final']);
        
        $total = $quiz + $midterm + $final;

        $grade = "";
        if ($total >= 80) {
            $grade = "A";
        } else if ($total >= 75) {
            $grade = "B+";
        } else if ($total >= 70) {
            $grade = "B";
        } else if ($total >= 65) {
            $grade = "C+";
        } else if ($total >= 60) {
            $grade = "C";
        } else if ($total >= 55) {
            $grade = "D+";
        } else if ($total >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<p>GET Total: $total Grade:<h1> $grade </h1></p>";

    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $quiz = ($_POST['quiz']);
        $midterm = ($_POST['midterm']);
        $final = ($_POST['final']);
        
        $total = $quiz + $midterm + $final;

        $grade = "";
        if ($total >= 80) {
            $grade = "A";
        } else if ($total >= 75) {
            $grade = "B+";
        } else if ($total >= 70) {
            $grade = "B";
        } else if ($total >= 65) {
            $grade = "C+";
        } else if ($total >= 60) {
            $grade = "C";
        } else if ($total >= 55) {
            $grade = "D+";
        } else if ($total >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<p>POST Total: $total Grade:<h1> $grade </h1></p>";
    }
} else {
    die('Method not allowed');
}
?>
</body>
</html>
