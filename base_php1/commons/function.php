<?php 
//khai báo các hàm sử dụng chung
//kết nối CSDL
function connect() {
    try {
        $host = DB_HOST;
        $port = DB_PORT;
        $name = DB_NAME;
        //tạo kết nối
        $conn = new PDO(
            "mysql:host=$host;port=$port;dbname=$name",
            DB_USERNAME,
            DB_PASSWORD
        );
        //cài đặt thông báo lỗi PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //cài đặt dữ liệu trả về
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed".$e->getMessage();
    }
}
?>
