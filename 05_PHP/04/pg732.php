<!-- pg731の受け取り手 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>パスワード登録</title>
</head>
<body>
<?php
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];
    $fileName = "./passwd.csv"; 
    $errors = array();
    if(strlen($user) < 4 || strlen($user) > 8){
        $errors[] = "ユーザ名は4文字以上で8文字以内です。";
    }
    if(preg_match("/[^a-zA-Z0-9]/", $user)){
        $errors[] = "ユーザ名は半角の英数字のみ有効です。";
    }
    if(strlen($passwd) < 6 || strlen($passwd) > 10){
        $errors[] = "パスワードは6文字以上で10文字以内です。";
    }
    if(preg_match("/[^[:alnum:][:punct:][:space:]]/", $passwd)){
        $errors[] = "パスワードは半角の英数字、記号、空白のみ有効です。";
        //[:alnum:]英数字、[:punct:]：記号、[:space:]:空白
    }
    if(count($errors) > 0){
        $errors[] = "ユーザ名/パスワードを修正してください。";
        $n = count ($errors);
            for($i = 0; $i < $n; $i++){
            echo "<font color=\"red\">" . $errors[$i] . "</font><br>";
            }
        exit;
    }
 
if(($fp = fopen($fileName, "r")) !== false){
    while(($data = fgetcsv($fp, 1000, ",")) !== false){
        if(strcmp($data[0], $user) == 0){
            echo "ユーザ名 " . $user . " は登録済みです。<br>";
            fclose($fp);
            exit;
        }
    }
    fclose($fp);
}else{
    echo "./passwd.csv ファイルがオープンできません。<br>";
    exit;
}
 
    fp = fopen($fileName, "a")
         or die("./passwd.csv ファイルがオープンできません。<br>");
    $data = array($_POST['user'], $_POST['passwd']);
    fputcsv($fp, $data);
    fclose($fp);
    echo "ユーザ名(" . $user . ")とパスワード(" . $passwd . ")を登録しました。";
?>
</body>
</html>