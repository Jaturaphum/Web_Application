<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            text-align: center;
            color: #333;
        }

        .btn-add-container {
            display: flex;
            /* justify-content: center; */
            margin-bottom: 20px;
        }

        .btn-add {
            padding: 10px 20px;
            background-color: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-add:hover {
            background-color: #0056b3;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        .card-container {
            margin-top: 20px;
        }

        .row-header {
            background-color: #007bff;
            color: white;
            padding: 14px;
            border-radius: 10px 10px 10px 10px;
            text-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .row-header div {
            font-weight: bold;
        }

        .card {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .centerrow {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .card a:hover {
            color: #0056b3;
        }

        .card .row {
            margin: 0;
        }
    </style>
</head>

<?php
include 'dbconnect.php';
if (isset($_GET["keyword"])) {
    $keyword = "%" . $_GET["keyword"] . "%";
    $sql = "SELECT * FROM new_productlines WHERE productLine LIKE ? OR textDescription LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $keyword, $keyword);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT * FROM new_productlines";
    $result = $conn->query($sql);
}
?>

<body>
    <div class="container">
        <h1>ระบบจัดการข้อมูล Product Lines</h1>
        <div class="btn-add-container">
            <a href="add_product.php" class="btn-add">เพิ่ม Product Lines</a>
        </div>
        <form class="search-bar" method="GET" action="">
            <input type="text" name="keyword" placeholder="ค้นหาชื่อ">
            <button type="submit">ค้นหา</button>
        </form>
        <div class="card-container">
            <form action="edit_product.php" method="post">
            <div class="row row-header">
                <div class="col-1">ลำดับที่</div>
                <div class="col-2">รูปภาพ</div>
                <div class="col-3">ชื่อ ProductLine</div>
                <div class="col-4">คำอธิบาย</div>
                <div class="col-2">จัดการข้อมูล</div>
            </div>
            <?php
            if ($result->num_rows > 0) {
                $idx = 1;
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card">
                        <div class="row">
                            <div class="col-1 centerrow" onclick="location.href = 'show_product.php?idx=<?php echo $row['productLine']; ?>';"><?php echo $idx++; ?></div>
                            <div class="col-2 centerrow"><img src="<?php echo $row['image']; ?>" alt="Product Image" style="width: 50px;"></div>
                            <div class="col-3 centerrow"><?php echo $row['productLine']; ?></div>
                            <div class="col-4 centerrow"><?php echo $row['textDescription']; ?></div>
                            <div class="col-2 centerrow">
                                <a href="edit_product.php?idx=<?php echo $row['productLine']; ?>" onclick="return confirm('ยืนยันการแก้ไขข้อมูลของ <?php echo $row['productLine']; ?>')">แก้ไข</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="delete.php?idx=<?php echo $row['productLine']; ?>" onclick="return confirm('ยืนยันการลบข้อมูลของ <?php echo $row['productLine']; ?>')">ลบ</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="card">
                    <div class="row">
                        <div class="col-12 centerrow">ไม่มีข้อมูล</div>
                    </div>
                </div>
            <?php
            }
            ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
