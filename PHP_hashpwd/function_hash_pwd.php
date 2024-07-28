<?php 
include "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $conn->prepare("SELECT password FROM employees WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1 && password_verify($password, $result->fetch_assoc()["password"])) {
    echo "<h1>Login Hash</h1>";
    echo "Login Success";
} else {
    echo "Incorrect password";
}

$conn->close();
?>
