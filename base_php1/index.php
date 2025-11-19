<?php 
//nhúng những file cần thiết, liên quan
require_once './commons/env.php'; //biến môi trường
require_once './commons/function.php'; 

//require controllers
require_once './controllers/ProductController.php';

//require models
require_once './models/Product.php';
require_once './models/Category.php';

//điều hướng (router)
$act = isset($_GET['act']) ? $_GET['act'] : '/';
switch ($act) {
    case '/':
        echo "Đây là trang chủ";
        break;
    case 'list':
        //khởi tạo một object từ class ProductController và gọi hàm list();
        (new ProductController())->list();
        break;
    case 'detail':
        (new ProductController())->detail();
        break;
    case 'delete':
        (new ProductController())->delete();
        break;
    case 'create':
        (new ProductController())->create();
        break;
    case 'update':
        (new ProductController())->update();
        break;
    default:
        echo "404 - Not found";
        break;
}
?>
