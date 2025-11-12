<?php 
//nhúng những file cần thiết, liên quan
require_once './commons/env.php'; //biến môi trường
require_once './commons/function.php'; 

//require controllers
require_once './controllers/ProductController.php';

//require models
require_once '/models/Product.php';

//điều hướng (router)
$act = isset($_GET['act']) ? $_GET['act'] : '/';
switch ($act) {
    case '/':
        echo "Đây là trang chủ";
        break;
    default:
        echo "404 - Not found";
        break;
}
?>
