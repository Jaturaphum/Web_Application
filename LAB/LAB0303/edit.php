<?php
session_start();
include "php/edit_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addnew.css">
    <title>แก้ไขข้อมูลนิสิต</title>
</head>

<body>
    <div class="container">
        <h1>แก้ไขข้อมูลนิสิต</h1>
        <p><a href="index.php">กลับไปหน้าเเรก</a></p>
        <form action="edit.php?studentid=<?php echo $student['studentid']; ?>" method="post">
            <label for="studentid">รหัสนิสิต</label>
            <input type="text" name="studentid" id="studentid" value="<?php echo $student['studentid']; ?>" readonly>

            <label for="prefix">คำนำหน้า</label>
            <select name="prefix" id="prefix">
                <option value="นาย" <?php if ($student['prefix'] == 'นาย') echo 'selected'; ?>>นาย</option>
                <option value="นาง" <?php if ($student['prefix'] == 'นาง') echo 'selected'; ?>>นาง</option>
                <option value="นางสาว" <?php if ($student['prefix'] == 'นางสาว') echo 'selected'; ?>>นางสาว</option>
            </select>

            <label for="fname">ชื่อนิสิต</label>
            <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">

            <label for="lname">นามสกุล</label>
            <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">

            <label for="year">ชั้นปี</label>
            <select name="year" id="year">
                <option value="1" <?php if ($student['year'] == '1') echo 'selected'; ?>>ปี 1</option>
                <option value="2" <?php if ($student['year'] == '2') echo 'selected'; ?>>ปี 2</option>
                <option value="3" <?php if ($student['year'] == '3') echo 'selected'; ?>>ปี 3</option>
                <option value="4" <?php if ($student['year'] == '4') echo 'selected'; ?>>ปี 4</option>
            </select>

            <label for="gpa">เกรดเฉลี่ย</label>
            <input type="text" name="gpa" id="gpa" value="<?php echo $student['gpa']; ?>">

            <label for="birthdate">วันเกิด</label>
            <input type="date" name="birthdate" id="birthdate" value="<?php echo $student['birthdate']; ?>">

            <button type="submit">บันทึกการแก้ไข</button>
</body>

</html>