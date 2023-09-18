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
 
    $fp = fopen($fileName, "a")
        or die("./passwd.csv ファイルがオープンできません。<br>");
    $data = array($_POST['user'], $_POST['passwd']);
    fputcsv($fp, $data);
    fclose($fp);
    echo "ユーザ名(" . $user . ")とパスワード(" . $passwd . ")を登録しました。";
    
?>
</body>
</html>