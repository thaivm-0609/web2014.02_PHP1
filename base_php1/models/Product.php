<?php 
class Product {
    public $connection; //khởi tạo thuộc tính $connection
    
    public function __construct()
    {
        //gán kết quả trả về của hàm connect() cho thuộc tính $connection
        $this->connection = connect(); 
    }

    public function getProduct() {
        //B1: khai báo câu truy vấn: 
        $sql = "SELECT * FROM products";
        //B2: thực thi câu truy vấn: 
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>
