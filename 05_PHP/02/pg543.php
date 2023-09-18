<!DOCTYPE html>
<html>
<head>
<title>三角関数と対数</title>
<meta charset="utf-8">
</head>
<body>
<h2>三角関数と対数</h2>
<p>
第1引数を入力し、演算ボタンを押してください。<br>
三角関数の角度の単位は、度数で入力してください。<br>
対数関数は、正の値のみ計算されます。<br>
演算結果が結果欄に表示されます。<br>
なお、計算できない場合には、その旨、結果欄に表示されます。
</p>
<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $num1 = $_POST['num1'];
        $op = $_POST['op'];
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
        }else{
            $res = "入力が数値ではありません。";
        }
    }else{
        $num1 = "";
        $op = "";
        $res = "";
    }
    if($op === "クリア"){
        $num1 = "";
        $op = "";
        $res = "";
    }
?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
<p>
    第1引数
    <input type="text" name="num1" value="<?php echo $num1; ?>">
</p>
<p>
    結果
    <input readonly="readonly" name="res" style="width:300px" value="<?php echo $res; ?>">
</p>
<p>
    <input type="submit" name="op" value="sin">
    <input type="submit" name="op" value="cos">
    <input type="submit" name="op" value="tan">
</p>
<p>
    <input type="submit" name="op" value="log">
    <input type="submit" name="op" value="log10">
</p>
<p>
    <input type="submit" name="op" value="クリア">
</p>
</form>
</body>
</html>