<?php
    //fopen()関数では、リードモード（r）を指定
    $fp = fopen("class.csv", "r")
        or die("ファイルをオープンできません。");

    //csv形式のファイルから読み込み：fgetcsv()関数
    //(行の最大長を1024とする。csvファイルの区切りを「","」で与えている。)
    while($data = fgetcsv($fp, 1024, ",")){
        $num = count($data);
        for($i = 0; $i < $num; $i++){
            echo "$data[$i] ";
        }
        echo "<br>";
    }
    fclose($fp) or die("ファイルをクローズできません。");
?>