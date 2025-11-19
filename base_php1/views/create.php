<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới sản phẩm</h1>
    <form 
        action="index.php?act=create"
        method="POST"
        enctype="multipart/form-data"
    >
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
                <?php foreach ($categories as $c) { ?>
                    <!-- value: là giá trị sẽ lưu vào db
                     label: là nhãn ng dùng nhìn thấy -->
                    <option value="<?= $c['id'] ?>"> <?= $c['name'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" name="submit" value="Create">
    </form>
</body>
</html>