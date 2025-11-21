<?php 
class Product {
    public $connection; //khởi tạo thuộc tính $connection
    
    public function __construct()
    {
        //gán kết quả trả về của hàm connect() cho thuộc tính $connection
        $this->connection = connect(); 
    }

    public function getProducts() {
        //B1: khai báo câu truy vấn: 
        $sql = "SELECT * FROM products";
        //B2: thực thi câu truy vấn: 
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(); //lấy tất cả bản ghi
    }

    public function findById($id) {
        //B1: khai báo câu truy vấn
        $sql = "SELECT * FROM products WHERE id=".$id;
        //B2: thực thi câu truy vấn
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(); //lấy 1 bản ghi
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id=".$id;
        $stmt = $this->connection->prepare($sql);
        
        return $stmt->execute();
    }

    public function store($name, $price, $categoryId, $image) {
        $sql = "INSERT INTO products (name, price, category_id, image)
            VALUES ('$name', '$price', '$categoryId', '$image')";
        $stmt = $this->connection->prepare($sql);

        return $stmt->execute();
    }

    public function update($id, $name, $price, $categoryId, $image)
    {
        $sql = "UPDATE products 
            SET name='$name',price='$price',category_id='$categoryId', image='$image'
            WHERE id=$id";
        $stmt = $this->connection->prepare($sql);

        return $stmt->execute();
    }
}
?>
