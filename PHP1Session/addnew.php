<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>
</head>
<style>
    form {
        margin: auto;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    }
</style>
<body>
    <form action="index.php" method="post">
        <h1>เพิ่มข้อมูลนิสิตใหม่</h1>
        <h3><a href='index.php'>กลับไปหน้าเเรก</a></h3>
        <br>
        รหัสนิสิต<input type="text" name="studentid"><br>
        <label for="antecedent">คำนำหน้า</label>
        <select name="antecedent">
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
        ชื่อนิสิต<input type="text" name="fname">
        นามสกุลนิสิต<input type="text" name="lname"><br>
        <label for="antecedent">ชั้นปี</label>
        <select name="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        เกรดเฉลี่ย<input type="text" name="grade">
        <label for="birthday">วันเกิด</label>
        <input type="date" id="birthday" name="birthday">
        <br>
        <input type="submit" value="เพิ่มข้อมูล">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $_SESSION["numberid"] = $_POST["studentid"];
    $_SESSION["antecedent"] = $_POST["antecedent"];
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["year"] = $_POST["year"];
    $_SESSION["grade"] = $_POST["grade"];
    $_SESSION["birthday"] = $_POST["birthday"];
}
?>

</body>
</html>