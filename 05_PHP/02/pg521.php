<!DOCTYPE html>
<html>
<head>
<title>電卓プログラム</title>
<meta charset="utf-8">
</head>
<body>
<h2>電卓プログラム</h2>
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    $res = "";
    if(is_numeric($num1) && is_numeric($num2)){
        switch($op){
            case "和":
                $res = $num1 + $num2;
                break;
            case "差":
                $res = $num1 - $num2;
                break;
            case "積":
                $res = $num1 * $num2;
                break;
            case "商":
                $res = $num1 / $num2;
                break;
        }
        echo "<p>演算結果は以下の通りです。</p>";
        echo "結果" . $res;            
    }else{
        echo "数値を入力してください。";
    }
?>
</body>
</html>