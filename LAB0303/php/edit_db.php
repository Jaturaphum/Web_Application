<?php
if (!isset($_GET['studentid']) || !isset($_SESSION['students'])) {
    header("Location: index.php");
    exit();
}

$studentid = $_GET['studentid'];
$student = null;
$student = array_filter($students, fn($s) => $s['studentid'] === $studentid);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_SESSION['students'] as &$s) {
        if ($s['studentid'] == $studentid) {
            // $s['prefix'] = $_POST['prefix'];
            // $s['fname'] = $_POST['fname'];
            // $s['lname'] = $_POST['lname'];
            // $s['year'] = $_POST['year'];
            // $s['gpa'] = $_POST['gpa'];
            // $s['birthdate'] = $_POST['birthdate'];
            $s = array_merge($s, $_POST);
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
