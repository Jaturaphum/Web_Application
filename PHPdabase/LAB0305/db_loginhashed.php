<?php
include 'connection.php';

$email = $_POST["email"];
$pwd = $_POST["password"];

$dbpassword = getPasswordFromDB($conn, $email);

if (password_verify($pwd, $dbpassword)) {
    echo "Login success";
} else {
    echo "Incorrect password";
}
$conn->close();

function getPasswordFromDB($conn, $email) {
    $stmt = $conn->prepare("SELECT password FROM employees WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row['password'];
    } else {
        return "";
    }
}
?>
