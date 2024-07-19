<?php
if (!isset($_GET['studentid']) || !isset($_SESSION['students'])) {
    header("Location: index.php");
    exit();
}

$studentid = $_GET['studentid'];
$student = null;

foreach ($_SESSION['students'] as $s) {
    if ($s['studentid'] == $studentid) {
        $student = $s;
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_SESSION['students'] as &$s) {
        if ($s['studentid'] == $studentid) {
            $s['prefix'] = $_POST['prefix'];
            $s['fname'] = $_POST['fname'];
            $s['lname'] = $_POST['lname'];
            $s['year'] = $_POST['year'];
            $s['gpa'] = $_POST['gpa'];
            $s['birthdate'] = $_POST['birthdate'];
            break;
        }
    }
    header("Location: index.php");
    exit();
}

if (!$student) {
    header("Location: index.php");
    exit();
}
