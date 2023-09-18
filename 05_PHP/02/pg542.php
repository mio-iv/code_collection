<!DOCTYPE html>
<html>
<head>
<title>2次方程式の解法</title>
<meta charset="utf-8">
</head>
<body>
<h2>2次方程式の解法</h2>
<p>
2次方程式 ax^2+bx+c=0 を解きます。<br>
係数の値を入力してから解法ボタンを押してください。<br>
解が複素数のとき、I は虚数単位を表し、実部が 0 の場合も表示します。<br>
なお、計算できない場合には、その旨、結果欄に表示されます。<br>
</p>
<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $op = $_POST['op'];
        if(is_numeric($a) && is_numeric($b) && is_numeric($c) && $a != 0){
            $d = $b*$b - 4*$a*$c;
            if($d > 0){
                $res = round((-$b + sqrt($d))/(2*$a),3);
                $res .= " , ";
                $res .= round((-$b - sqrt($d))/(2*$a),3);
            }elseif($d < 0){
                $xr = -round($b/(2*$a),3);
                $xi = round(sqrt(abs($d))/(2*$a),3);
                $res = $xr . " + " . $xi . " I" . " , ";
                $res .= $xr . " - " . $xi . " I";
            }else{
                $res = -round($b/(2*$a),3);
            }
        }else{
            $res = "a が 0 であるか、入力が数値ではありません。";
        }
    }else{
        $a = "";
        $b = "";
        $c = "";
        $op = "";
        $res = "";
    }
    if($op === "クリア"){
        $a = "";
        $b = "";
        $c = "";
        $op = "";
        $res = "";
    }
?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
<p>
    a
    <input type="text" name="a" value="<?php echo $a; ?>">
</p>
<p>
    b
    <input type="text" name="b" value="<?php echo $b; ?>">
</p>
<p>
    c
    <input type="text" name="c" value="<?php echo $c; ?>">
</p>
<p>
    結果
    <input readonly="readonly" name="res" style="width:320px" value="<?php echo $res; ?>">
</p>
<p>
    <input type="submit" name="op" value="解法">
</p>
<p>
    <input type="submit" name="op" value="クリア">
</p>
</form>
</body>
</html>