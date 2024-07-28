<?php
include 'connection.php';
// if (isset($_GET["email"]) && isset($_GET["password"])) {
$email = $_POST["email"];
$pwd = $_POST["password"];

$sql = "SELECT * FROM employees WHERE email='" . $email . "' AND password='" . $pwd . "'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Login successful" . "<br>";
    $row = $result->fetch_assoc();
    echo "<br>" . "Email: " . $row["email"];
    echo " <br> " . "Firstname: " . $row["firstName"];
    echo " <br> " . "Lastname: " . $row["lastName"];
    echo " <br> " . "Password: " . $row["password"];
} else {
    echo "Login Failed";
}
// }
?>
