<?php
session_start();
include 'php/delete_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>ข้อมูลนิสิตทั้งหมด</title>
</head>

<body>
    <h1>แสดงข้อมูลนิสิตทั้งหมด</h1>
    <p><a href="addnew.php">เพิ่มข้อมูลนิสิต</a></p>

    <?php if (!isset($_SESSION['students']) || count($_SESSION['students']) == 0) : ?>
        <h2>ยังไม่พบข้อมูล</h2>
    <?php else : ?>
        <h2>นิสิตทั้งหมด: <?php echo count($_SESSION['students']); ?></h2>
        <table border="1">
            <tr>
                <th>รหัสนิสิต</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ชั้นปี</th>
                <th>เกรดเฉลี่ย</th>
                <th>วันเกิด</th>
                <th>จัดการข้อมูล</th>
            </tr>
            <?php foreach ($_SESSION['students'] as $student) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['studentid']); ?></td>
                    <td><?php echo htmlspecialchars($student['prefix']); ?></td>
                    <td><?php echo htmlspecialchars($student['fname']); ?></td>
                    <td><?php echo htmlspecialchars($student['lname']); ?></td>
                    <td><?php echo htmlspecialchars($student['year']); ?></td>
                    <td><?php echo htmlspecialchars($student['gpa']); ?></td>
                    <td><?php echo htmlspecialchars($student['birthdate']); ?></td>
                    <td>
                        <a href="edit.php?studentid=<?php echo urlencode($student['studentid']); ?>">เเก้ไข</a>
                        <a href="index.php?studentid=<?php echo urlencode($student['studentid']); ?>">ลบ</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>