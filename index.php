<?php
// (forward slash): cmt cho 1 dòng \\(backward slash)
/**
 * comment 
 * cho
 * nhiều 
 * dòng
 */

/** variable: biến số => giá trị có thể thay đổi
 * $tenBien: tên biến không được bắt đầu bằng số/ký tự đặc biệt
 * tenBien: phải có ý nghĩa và gợi nhớ
 * Quy tắc đặt tên: danh sach sinh vien
 * - camelCase: danhSachSinhVien => đặt tên biến - hàm
 * - snake_case: danh_sach_sinh_vien
 * - PascalCase: DanhSachSinhVien => đặt tên class
 */

$a = 5; //không gán giá trị
$b = 10; //khai báo biến và gán giá trị luôn cho nó

/** constant: hằng số => giá trị không thay đổi
 * const tenHangSo = value; Hằng số bắt buộc phải gán giá trị ngay khi khởi tạo
 * tên hằng số thường được viết dưới dạng UPPERCASE: TEN_HANG_SO 
 */
const test = 1;

// echo $a + $b;
// $c = 15;
// $d = 20;
// echo $c + $d;

/** function: hàm => tập hợp xử lý logic (chức năng) để tái sử dụng nhiều lần
 * function tenHam(param1, param2) {
 *      code logic
 *      return
 * }
 * 
 * - Phân loại hàm
 *  + Dựa vào tham số truyền vào: Có tham số | Không có tham số
 *  + Dựa vào kết quả trả về: Có return | Không có return
 * 
 * - Truyền tham số khi gọi hàm:
 *  + truyền đủ số lượng tham số như đã khai báo
 *  + TRUYỀN ĐÚNG THỨ TỰ THAM SỐ
 */
function tinhTong($a,$b) { //khai báo (khởi tạo hàm)
    echo $a + $b;
}
// tinhTong(10,30);//gọi hàm (thực thi hàm)

function giaiPTB2($a,$b,$c) {
    $delta = $b*$b - 4*$a*$c;
    if ($delta < 0) {
        echo "PT vô nghiệm";
    } else if ($delta == 0) {
        $x = -$b/(2*$a);
        echo "PT có nghiệm kép x1=x2=".$x;
    } else {
        $x1 = (-$b + sqrt($delta))/(2*$a);
        $x2 = (-$b - sqrt($delta))/(2*$a);
        echo "PT có 2 nghiệm x1=".$x1." và x2=".$x2;
    }
}

function checkEvenOdd($number) {
    // if ($number%2 == 0) {
    //     echo $number." là số chẵn";
    // } else {
    //     echo $number." là số lẻ";
    // }

    //toán tử 3 ngôi: (đk) ? value nếu đk đúng : value nếu đk sai
    $result = $number%2 == 0 ? "chẵn" : "lẻ";
    echo $number." là số ".$result;
}
checkEvenOdd(5);

?>

