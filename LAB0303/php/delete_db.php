<?php
if (isset($_GET['studentid'])) {
    foreach ($_SESSION['students'] as $key => $student) {
        if ($student['studentid'] == $_GET['studentid']) {
            unset($_SESSION['students'][$key]);
            $_SESSION['students'] = array_values($_SESSION['students']);
            break;
        }
    }
}