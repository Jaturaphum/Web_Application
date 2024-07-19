<?php
session_start();
include 'php/add_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addnew.css">
    <title>เพิ่มข้อมูลนิสิต</title>
</head>

<body>
    <div class="container">
        <h1>เพิ่มข้อมูลนิสิตใหม่</h1>
        <p><a href="index.php">กลับไปหน้าเเรก</a></p>
        <form action="addnew.php" method="post">
            <label for="studentid">รหัสนิสิต</label>
            <input type="text" name="studentid" id="studentid" value="">

            <label for="prefix">คำนำหน้า</label>
            <select name="prefix" id="prefix">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>

            <label for="fname">ชื่อนิสิต</label>
            <input type="text" name="fname" id="fname" value="">

            <label for="lname">นามสกุล</label>
            <input type="text" name="lname" id="lname" value="">

            <label for="year">ชั้นปี</label>
            <select name="year" id="year">
                <option value="1">ปี 1</option>
                <option value="2">ปี 2</option>
                <option value="3">ปี 3</option>
                <option value="4">ปี 4</option>
            </select>

            <label for="gpa">เกรดเฉลี่ย</label>
            <input type="text" name="gpa" id="gpa" value="">

            <label for="birthdate">วันเกิด</label>
            <input type="date" name="birthdate" id="birthdate">

            <button type="submit" name="submit">เพิ่มข้อมูล</button>
        </form>
    </div>
</body>

</html>