<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 session</title>
</head>
<style>
  body {
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
    <h1>เเสดงข้อมูล</h1>
    <h3><a href='addnew.php'>เพิ่มข้อมูล</a></h3>
    <?php if (isset($_POST["studentid"]) && !empty($_POST["studentid"])) { ?>
        <h1>ข้อมูลนิสิต</h1>
        <table border="1">
            <tr>
                <th>รหัสนิสิต</th>
                <th>ค่าน่าหน้า</th>
                <th>ชั้นปี</th>
                <th>เกรดเฉลี่ย</th>
                <th>ชื่อนิสิต</th>
                <th>นามสกุลนิสิต</th>
                <th>วันเกิด</th>
                <th>จัดการข้อมูล</th>
            </tr>
            <tr>
                <th><?php echo $_POST["studentid"]; ?></th>
                <th><?php echo $_POST["antecedent"]; ?></th>
                <th><?php echo $_POST["year"]; ?></th>
                <th><?php echo $_POST["grade"]; ?></th>
                <th><?php echo $_POST["fname"]; ?></th>
                <th><?php echo $_POST["lname"]; ?></th>
                <th><?php echo $_POST["birthday"]; ?></th>
                <th>
                    <a href="edit.php?numberid=<?php echo $_POST["studentid"]; ?>">เเก้ไข</a>
                    <a href="index.php?numberid=<?php echo $_POST["studentid"]; ?>">ลบข้อมูล</a>
                </th>
            </tr>
        </table>
    <?php } else { ?>
        <p>ยังไม่มีข้อมูล</p>
    <?php } ?>
</body>
</html>