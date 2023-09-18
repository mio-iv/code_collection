<!-- 空文字列かどうかの判断をして、
空でない場合には登録されているユーザ名及びパスワードと
一致するかどうかを判断するプログラム -->

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
 
    if(empty($user)){
        //empty()関数 ※0の時も実は、「false」
        echo "ユーザ名が入力されていません。";
        exit;
    }
    if(empty($passwd)){
        //empty()関数 ※0の時も実は、「false」
        echo "パスワードが入力されていません。";
        exit;
    }
 
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