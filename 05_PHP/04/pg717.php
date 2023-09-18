<!-- ハッシュ化されたパスワードが元のパスワードと一致するかどうか調べるプログラム -->
<?php
    $user = "cyber";
    $password = "University";
    $fp = fopen("./passwd.txt", "r");    
    //$dataには、user名とpasswdのハッシュが書き込まれている想定。
    $data = fgetcsv($fp, 1000, ",");

    if(
        strcmp($data[0], $user)==0 &&
        //password_verify関数に元のパスワードとハッシュ化されたパスワードを渡す
        password_verify($password, $data[1])
    ){
        echo "ユーザ名とパスワードが一致しました。";
    }else{
        echo "残念でした。";
    }
    fclose($fp);
    exit;

?>