<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>学生情報登録</title>
</head>
<body>
<?php
    $pstN = htmlspecialchars($_POST['postNum'], ENT_QUOTES, "utf-8");
    $adrs = htmlspecialchars($_POST['address'], ENT_QUOTES, "utf-8");

    $errMsg = "";   //初期化

    //数字10桁(\d{10})のみで前(\A)後(\z)に文字は来ない場合
    //数字11桁(\d{11})のみで前(\A)後(\z)に文字は来ない場合
    //先頭が0（\A0）でない場合もエラー

    $tmp = mb_convert_kana($pstN, "a", "UTF-8");
    //「"a"」は「全角」の英数字を「半角」に変換します
    //mb_convert_kana()に渡すパラメータをオプションパラメータと呼ぶこともある。
    こともあります。良く使われるオプションパラメータを以下に記しておきます。 
    if(
        (!(preg_match("/A\d{7}\x/", $tmp))) 
        or preg_match("/A\d{3}-\d{4}\z/", $tmp)){
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