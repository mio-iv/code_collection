<?php
    $fp = fopen("class.csv", "r")
        or die("ァイルをオープンできません。");
    
    //データの要素があらかじめ分かっている場合は下のようなことができる。
    while(list($num, $name, $sub, $score) = fgetcsv($fp, 1024, ",")){
        echo "$num $name $sub $score<br>";
    }
    fclose($fp) or die("ファイルをクローズできません。");
?>