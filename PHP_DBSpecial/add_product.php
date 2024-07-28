<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Product</title>
    <style>
        .h2-title {
            text-align: center;
            color: black;
            font-size: 5.6em;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-body {
        }
    </style>
</head>

<body>
<?php
include'dbconnect.php';
if (isset($_POST["register"])) {
    include "dbconnect.php";
    $sql = "INSERT INTO new_productlines (productLine, textDescription, htmlDescription, image) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $_POST["productline"], $_POST["description"], $_POST["html"], $_POST["image"]);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        header("location: product.php");
    } else {
        echo $stmt->affected_rows;
        echo "Register error";
    }
    exit(0);
}
?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">ระบบข้อมูล Product Lines</h1>
        <a href="product.php" class="btn btn-primary btn-sm mb-3">กลับหน้าแรก</a>
        <div class="card shadow">
            <div class="card-header">
                <h2 class="card-title text-center">เพิ่มข้อมูล Product Line ใหม่</h2>
            </div>
            <div class="card-body">
                <form action="product.php" method="POST">
                    <div class="mb-3 row">
                        <label for="productline" class="col-sm-3 col-form-label">ชื่อ ProductLine</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="productline" name="productline" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-3 col-form-label">คำอธิบาย</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html" class="col-sm-3 col-form-label">Link HTML</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="url" id="html" name="html" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-3 col-form-label">รูปภาพ (URL)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="url" id="image" name="image" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <input class="btn btn-primary" type="submit" name="register" value="ลงทะเบียน">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
