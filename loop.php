<?php
/**Vòng lặp
 * - for:
 * - foreach:
 * - while - do while
 */

//for: for(giá trị khởi tạo; điều kiện chạy; bước nhảy);
//VD: in ra màn hình các số chẵn trong khoảng từ 1->10
for($i=1; $i<=10; $i++) {
    if ($i%2 == 0) { //kiểm tra $i chia cho 2 dư 0 hay không?
        echo $i.', ';
    }
}

//foreach: foreach($nhieu as $it) {}
$array = [1,2,3,4,5];
foreach($array as $n) {
    echo ($n*10).',<br>';
}

/**- while: kiểm tra điều kiện trước => thỏa mãn thì mới thực thi code
 * while (điều kiện) {
 *      code thực thi
 * }
 * 
 * do {
 *      code thực thi
 * } while (điều kiện)
 * - do while: thực thi code trước => kiểm tra điều kiện
*/

?>

