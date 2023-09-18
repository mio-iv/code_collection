<!-- PHPでハッシュ化する方法 -->
<?php
    $user = "cyber";
    $passwd = "University";

    //password_hash()関数でハッシュ化
    $res = password_hash(
        $passwd, PASSWORD_DEFAULT
    );

    // var_dump()関数:
    // 画面上にハッシュ化された文字列に関する情報が表示
    var_dump($res);

    $fp = fopen("./passwd.txt", "w");
    $data = array($user, $res);
    fputcsv($fp, $data);
    fclose($fp);    


?>