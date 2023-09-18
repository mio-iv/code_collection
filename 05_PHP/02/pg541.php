<!DOCTYPE html>
<html>
<head>
<title>電卓プログラム</title>
<meta charset="utf-8">
</head>
<body>
<h2>電卓プログラム</h2>
<p>
第1引数と第2引数を入力し、演算ボタンを押してください。<br>
演算結果が結果欄に表示されます。<br>
なお、計算できない場合には、その旨、結果欄に表示されます。
</p>
<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
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
        }else{
            $res = "入力が数値ではありません。";
        }
    }else{
        $num1 = "";
        $num2 = "";
        $op = "";
        $res = "";
    }
    if($op === "クリア"){
        $num1 = "";
        $num2 = "";
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
    第2引数
    <input type="text" name="num2" value="<?php echo $num2; ?>">
</p>
<p>
    結果
    <input readonly="readonly" name="res" value="<?php echo $res; ?>">
</p>
<p>
    <input type="submit" name="op" value="和">
    <input type="submit" name="op" value="差">
    <input type="submit" name="op" value="積">
    <input type="submit" name="op" value="商">
</p>
<p>
    <input type="submit" name="op" value="クリア">
    </p>
</form>
</body>
</html>