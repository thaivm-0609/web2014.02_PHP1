<?php 
class ProductController {
    public $product;

    public function __construct()
    {
        //gán giá trị của thuộc tính $product là 1 object khởi tạo từ model Product
        $this->product = new Product();
    }
    
    //$this->tenObject->tenHam();
    public function list() {
        //gọi hàm getProducts() ở model 
        $products = $this->product->getProducts();
        
        require_once './views/list.php';
    }

    public function detail() {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $product = $this->product->findById($_GET['id']);

            require_once './views/detail.php';
        }
    }

    public function delete() {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $this->product->deleteProduct($_GET['id']);

            header('location: index.php?act=list'); //đưa người dùng về trang danh sách sau khi xóa
        }
    }
}
?>
