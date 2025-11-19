<?php 
class ProductController {
    public $product;
    public $category;

    public function __construct()
    {
        //gán giá trị của thuộc tính $product là 1 object khởi tạo từ model Product
        $this->product = new Product();
        $this->category = new Category();
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

    public function create() {
        if (isset($_POST['submit'])) { //kiểm tra ng dùng đã bấm nút submit hay chưa?
            $name = $_POST['name'];
            $price = $_POST['price'];
            $categoryId = $_POST['category_id'];
            $image = $_FILES['image']; //file upload lên sẽ được gửi qua $_FILES
            //upload file
            $from = $image['tmp_name'];//vị trí file tạm thời (tmp_name)
            $targetFolder = PATH_ROOT . 'uploads/';//vị trí thư mục lưu trữ file
            $to = $targetFolder.basename($image['name']);//ghép thư mục lưu trữ + tên file
            move_uploaded_file($from, $to);
            //lưu dữ liệu vào trong db
            $this->product->store($name, $price, $categoryId, $image['name']);
            header('location: index.php?act=list');
        }
        //hiển thị form
        $categories = $this->category->getCategories();
        require_once './views/create.php';
    }
}
?>
