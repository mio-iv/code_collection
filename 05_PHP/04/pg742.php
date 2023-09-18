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
 
    if(isset($_POST['regist'])){
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
                if($data[0] == $user){
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
        $data = array($_POST['user'],
            password_hash($_POST['passwd'], PASSWORD_DEFAULT));
        fputcsv($fp, $data);
        fclose($fp);
        echo "ユーザ名(" . $user . ")とパスワード(" . $passwd . ")を登録しました。";
    }
 
    if(isset($_POST['login'])){
        if(empty($user)){
            echo "ユーザ名が入力されていません。";
            exit;
        }
        if(empty($passwd)){
            echo "パスワードが入力されていません。";
            exit;
        }
        if(($fp = fopen($fileName, "r")) !== false){
            while(($data = fgetcsv($fp, 1000, ",")) !== false){
                if($data[0] == $user &&
                    password_verify($_POST['passwd'], $data[1])){
                    echo "ようこそ " . $data[0] . " さん。";
                    fclose($fp);
                    exit;
                }elseif($data[0] == $user){
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
    }
?>
</body>
</html>