<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>学生情報登録</title>
</head>
<body>
<?php
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8");
    $teln = htmlspecialchars($_POST['telNum'], ENT_QUOTES, "utf-8");

    $errMsg = "";   //初期化

    //数字10桁(\d{10})のみで前(\A)後(\z)に文字は来ない場合
    //数字11桁(\d{11})のみで前(\A)後(\z)に文字は来ない場合
    //先頭が0（\A0）でない場合もエラー

    $tmp = mb_convert_kana($teln, "n", "UTF-8");
    if(!(preg_match("/\A0/", $tmp))){
        $errMsg = "<span style=\"color:red\">市外局番から入力してください。"
    }
    if(!(preg_match("/\A\d{10}\z/", $tmp))){
        $errMsg = $errMsg . "<span style=\"color:red\">ハイフンなしの電話番号ではありません。</span><br>";
    }
    $teln = $errMsg . $tmp;
    echo "<form action=\"pg434.php\" method=\"post\">
        <p>下記の内容を確認してください。</p>
        <table border=\"1\">
        <tr>
        <td>氏名</td><td>$name</td>
        </tr>
        <tr>
        <td>電話番号</td><td>$teln</td>
        </tr>
        </table><br>";

    if(empty($errMsg)){
        echo "<input type=\"submit\" value=\"確認\"><br>";
        echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
        echo "<input type=\"hidden\" name=\"telNum\" value=\"$teln\">";
    }else{
        echo "ブラウザの戻るボタンで戻ってください。";
    }
    echo "</form>";
?>
</body>
</html>