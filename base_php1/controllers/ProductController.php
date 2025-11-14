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
        //gọi hàm getProduct() ở model 
        $products = $this->product->getProduct();
        
        require_once './views/list.php';
    }
}
?>
