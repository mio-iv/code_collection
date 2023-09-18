<?php
    $file = "./test/test.txt"
    if(file_exists($file)){
        if(rename($file, "/test/newfile.txt")){
            "ファイルの削除が完了。"
        }else{
            echo "エラー：ファイルの削除に失敗"
        }
    }else{
        echo "ファイルが存在しません。"
    }


?>