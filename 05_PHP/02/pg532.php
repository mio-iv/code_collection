<!DOCTYPE html>
<html>
<head>
<title>2次方程式の解法</title>
<meta charset="utf-8">
</head>
<body>
<h2>2次方程式の解法</h2>
<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $res = "";
    if(is_numeric($a) && is_numeric($b) && is_numeric($c) && $a != 0){
        $d = $b*$b - 4*$a*$c;
        if($d > 0){
            $x1 = (-$b + sqrt($d))/(2*$a);
            $x2 = (-$b - sqrt($d))/(2*$a);
            $res = $x1.", ".$x2."(異なる2つの実数解)";
        }elseif($d < 0){
            $xr = -$b/(2*$a);
            $xi = sqrt(abs($d))/(2*$a);
            $res=$xr."+".$xi."I".", ";
            $res .= $xr . " - " . $xi . " I";
            $res .= " (異なる2つの複素数解)";
        }else{
            $res = -$b /(2*$a) . " (重解)";
        }
        echo "<p>計算結果は以下のとおりです。</p>";
        echo "結果 " , $res;
    }else{
        echo "a が 0 であるか、入力が数値ではありません。";
    }
?>
<p>
<a href="pg532.html">トップページへ</a>
</p>
</body>
</html>