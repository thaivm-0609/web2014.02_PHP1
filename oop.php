<?php
/**
 * class: là tập hợp những đối tượng có cùng thuộc tính, đặc điểm, hành vi
 * cú pháp: class TenClass {
 *  - thuộc tính (biến): đặc điểm, thông tin cần lưu trữ
 *      public $tenThuocTinh;
 *  - phương thức (hàm): hành động mà đối tượng có thể thực hiện
 *      public function tenHam() {
 *      
 *      }
 * }
 */

class SinhVien {
    public $ten;
    public $namSinh;
    public $gioiTinh;

    //hàm construct sẽ tự động thực thi khi khởi tạo object từ class
    public function __construct($inputTen, $inputNamSinh, $inputGioiTinh)
    {
        //sử dụng biến giả: $this->tenBien để truy cập đến $tenBien;
        $this->ten = $inputTen;
        $this->namSinh = $inputNamSinh;
        $this->gioiTinh = $inputGioiTinh;
    }

    public function diHoc() {
        echo "Xe máy";
    }

    public function hienThiThongTin() {
        echo 'Tên:' .$this->ten.'<br> Năm sinh:'.$this->namSinh.'<br> Giới tính:'.$this->gioiTinh;
    }
}

/** object
 * cú pháp khởi tạo: $tenObject = new TenClass();
 * truy suất thuộc tính của object: $tenObject->tenThuocTinh;
 */
$nguyenVanA = new SinhVien('thaivm2', 1900, 'Male');
// $nguyenVanA->ten = 'Vương Minh Thái';
// $nguyenVanA->hienThiThongTin(); //gọi hàm hienThiThongTin;
var_dump($nguyenVanA);
?>
