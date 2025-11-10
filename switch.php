<?php
    if (isset($_POST['submit'])) { //kiểm tra người dùng đã bấm submit hay chưa?
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                //code logic của case
                echo $a + $b;
                break;
            case '-':
                echo $a - $b;
                break;
            case '*':
                echo $a*$b;
                break;
            case '/':
                if ($b == 0) {
                    echo "Không được chia cho 0";
                } else {
                    echo $a/$b;
                }
                break;
            default: 
                echo "Phép tính không hợp lệ";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./switch.php" method="POST">
        <div>
            <label for="">Số a</label>
            <input type="number" name="a">
        </div>
        <div>
            <label for="">Số b</label>
            <input type="number" name="b">
        </div>
        <div>
            <label for="">Phép tính</label>
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Tính">
    </form>
</body>
</html>