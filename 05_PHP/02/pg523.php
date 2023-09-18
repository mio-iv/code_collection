<!DOCTYPE html>
<html>
<head>
<title>三角関数と対数</title>
<meta charset="utf-8">
</head>
<body>
<h2>三角関数と対数</h2>
<?php
        $num1 = $_POST['num1'];
        $op = $_POST['op'];
        $res = "";
        if(is_numeric($num1)){
            switch($op){
                case "sin":
                    $res = sin(deg2rad($num1));
                    break;
                case "cos":
                    $res = cos(deg2rad($num1));
                    break;
                case "tan":
                    $res = tan(deg2rad($num1));
                    break;
                case "log":
                    if($num1 > 0){
                        $res = log($num1);
                    }else{
                        $res = "入力数値が正ではありませんので計算できません。";
                    }
                    break;
                case "log10":
                    if($num1 > 0){
                        $res = log10($num1);
                    }else{
                        $res = "入力数値が正ではありませんので計算できません。";
                    }
                    break;
            }
            echo "<p>演算結果は以下のとおりです。</p>";
            echo "結果 " , $res;
        }else{
            echo "数値を入力してください。";
        }
?>
</body>
</html>