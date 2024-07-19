<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentData = array(
        'studentid' => $_POST['studentid'],
        'prefix' => $_POST['prefix'],
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'year' => $_POST['year'],
        'gpa' => $_POST['gpa'],
        'birthdate' => $_POST['birthdate']
    );

    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = array();
    }

    $_SESSION['students'][] = $studentData;

    header('Location: index.php');
    exit();
}