<?php 
/**
 * để viết code php giữa html
 * <element> <?php echo $tenBien ?></element>
 * <element> <?= $tenBien ?> </element>
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang danh sách</h1>
    <table>
        <thead>
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $p) { ?>
                <tr>
                    <td><?php echo $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['category_id'] ?></td>
                    <td><?= $p['price'] ?></td>
                    <td>
                        <img style="width: 100px" src="./uploads/<?= $p['image'] ?>" alt="">
                    </td>
                    <td>
                        <a 
                            href="index.php?act=detail&id=<?= $p['id'] ?>" 
                            type="button"
                        >
                            Detail
                        </a>
                        <a href="" type="button">Edit</a>
                        <a 
                            onclick="return confirm('Bạn có chắc không?')"
                            href="index.php?act=delete&id=<?= $p['id'] ?>" 
                            type="button"
                        >
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>