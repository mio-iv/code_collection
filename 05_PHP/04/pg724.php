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
            if(strcmp($data[0], $user) == 0 && strcmp($data[1], $passwd) == 0){
                echo "ようこそ " . $data[0] . " さん。";
                fclose($fp);
                exit;
            }elseif(strcmp($data[0], $user) == 0){
                echo "パスワードが間違っています。";
                fclose($fp);
                exit;
            }
        }
        echo "ユーザは登録されていません。";
        fclose($fp);
    }else{
        echo "./passwd.csv ファイルがオープンできません。<br>";
        exit;
    }
?>
</body>
</html>