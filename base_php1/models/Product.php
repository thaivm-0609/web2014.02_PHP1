<?php 
class Product {
    public $connection; //khởi tạo thuộc tính $connection
    
    public function __construct()
    {
        //gán kết quả trả về của hàm connect() cho thuộc tính $connection
        $this->connection = connect(); 
    }
}
?>
