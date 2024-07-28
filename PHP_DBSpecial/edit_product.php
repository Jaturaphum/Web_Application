<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Product</title>
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
    </style>
</head>

<body>
    <?php
    // include 'dbconnect.php';

    // if (isset($_GET['idx'])) {
    //     $sql = "SELECT productLine, textDescription, htmlDescription, image FROM new_productlines WHERE productLine = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("s", $_GET['idx']);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    //     if ($result->num_rows == 1) {
    //         $row = $result->fetch_assoc();
    //     } else {
    //         echo "Edit Error";
    //         exit;
    //     }
    // }

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $productline = $_POST['productline1'];
    //     $new_productline = $_POST['productline'];
    //     $description = $_POST['description'];
    //     $html = $_POST['html'];
    //     $image = $_POST['image'];

    //     $sql = "UPDATE new_productlines SET productLine = ?, textDescription = ?, htmlDescription = ?, image = ? WHERE productLine = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("sssss", $new_productline, $description, $html, $image, $productline);

    //     if ($stmt->execute()) {
    //         header("Location: product.php");
    //         exit;
    //     }
        
    // }

    //แบบย่อโค้ด
include 'dbconnect.php';

if (isset($_GET['idx'])) {
    $sql = "SELECT productLine, textDescription, htmlDescription, image FROM new_productlines WHERE productLine = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET['idx']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = ($result->num_rows == 1) ? $result->fetch_assoc() : exit('edit error');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "UPDATE new_productlines SET productLine = ?, textDescription = ?, htmlDescription = ?, image = ? WHERE productLine = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $_POST['productline'], $_POST['description'], $_POST['html'], $_POST['image'], $_POST['productline1']);
    if ($stmt->execute()) {
        header("Location: product.php");
        exit;
    }
}
    ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">ระบบข้อมูล Product Lines</h1>
        <a href="product.php" class="btn btn-primary btn-sm mb-3">กลับหน้าแรก</a>
        <div class="card shadow">
            <div class="card-header">
                <h2 class="card-title text-center">เเก้ไขข้อมูล Product Line ใหม่</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input class="form-control" type="hidden" name="productline1" value="<?php echo htmlspecialchars($row["productLine"]); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">ชื่อ ProductLine</div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="productline" value="<?php echo htmlspecialchars($row["productLine"]); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">ค่าอธิบาย</div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="description" value="<?php echo htmlspecialchars($row["textDescription"]); ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">Link HTML</div>
                            <div class="col-9">
                                <textarea class="form-control" type="text" name="html" rows="5"><?php echo htmlspecialchars($row["htmlDescription"]); ?></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin: 5px;">
                            <div class="col-3">รูปภาพ (URL)</div>
                            <div class="col-9"> <textarea class="form-control" type="text" name="image" rows="5"><?php echo htmlspecialchars($row["image"]); ?></textarea> </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input class="btn btn-primary" type="submit" name="edit" value="เเก้ไขข้อมูล">
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
