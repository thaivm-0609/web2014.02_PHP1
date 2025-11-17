<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang chi tiết</h1>
    <p>ID: <?= $product['id'] ?></p>
    <p>Name: <?= $product['name'] ?></p>
    <p>Price: <?= $product['price'] ?></p>
    <p>Category: <?= $product['category_id'] ?></p>
    <p>Image:</p>
    <img src="<?= $product['image'] ?>" alt="">
</body>
</html>