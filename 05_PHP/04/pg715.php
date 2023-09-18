<?php
    $str = "Cyber University";
    echo "str = " . $str . "<br>";

    //暗号化メソッドの指定
    $cipher = "AES-128-CBC";
    //共通鍵キー
    $key = "rZF26x7Y";
    //オプション
    $option = 0;
    //初期化ベクトル
    $iv = "9h493ecCd2qFa5Lu";

    //openssl_encrypt()関数で暗号化
    $enc_str = openssl_encrypt(
        $str, $cipher, $key, $option, $iv
    );
    echo "enc_str = " . $enc_str . "<br>";

    $denc_str = openssl_decrypt(
        $enc_str, $cipher, $key, $option, $iv
    );
    echo "denc_str = " . $denc_str . "<br>";
    
?>