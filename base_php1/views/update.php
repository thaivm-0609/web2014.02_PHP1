<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chỉnh sửa sản phẩm</h1>
    <form 
        action="index.php?act=update&id=<?= $product['id'] ?>"
        method="POST"
        enctype="multipart/form-data"
    >
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?= $product['name'] ?>">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price" value="<?= $product['price'] ?>">
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
            <img src="./uploads/<?= $product['image'] ?>" alt="">
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
                <?php foreach ($categories as $c) { ?>
                    <!-- value: là giá trị sẽ lưu vào db
                     label: là nhãn ng dùng nhìn thấy 
                     điều kiện để gán selected $product['category_id'] == $c['id']-->
                    <?php if ($c['id'] == $product['category_id']) { ?>
                        <option selected value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                    <?php } else { ?>
                        <option value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <input type="submit" name="submit" value="Create">
    </form>
</body>
</html>