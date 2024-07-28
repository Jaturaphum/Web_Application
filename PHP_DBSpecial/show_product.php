<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product Details</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            text-align: center;
            color: #333;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }

        .card p {
            margin: 0;
        }

        .back-btn {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>รายละเอียดสินค้า</h1>
        <?php
        include 'dbconnect.php';

        if (isset($_GET['idx'])) {
            $productLine = $_GET['idx'];
            $sql = "SELECT * FROM new_productlines WHERE productLine = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $productLine);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
                <div class="card">
                    <img src="<?php echo $row['image']; ?>" alt="Product Image">
                    <p> ชื่อ ProductLine: <?php echo $row['productLine']; ?></p>
                    <p> คำอธิบาย TextDescription: <?php echo $row['textDescription']; ?></p>
                    <p>ที่อยู่ของข้อมูล HtmlDescription: <?php echo $row['htmlDescription']; ?></p>
                </div>
        <?php
            } else {
            }
        } else {
        }
        ?>
        <a href="product.php" class="back-btn">กลับหน้าเเรก</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>