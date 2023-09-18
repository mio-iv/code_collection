<?php
    $score = array(
        array(2104021, "福岡", "数学", 95),
        array(2104029, "宮崎", "英語", 67),
        array(2104005, "熊本", "国語", 73)
    );
    //書き込みモードでオープン
    $fp = fopen("class.csv", "w")
        //オープンできないときは、die()関数でメッセージ
        or die("class.csv ファイルをオープンできません。");

    //$scoreから1行分のデータを取り出して、$score_lineに格納
    foreach($score as $score_line){
        //fputcsv()関数でcsv形式でファイルに書き込み
        if(fputcsv($fp, $score_line) == FALSE){
            //書き込みに失敗したときは、「false」が返ってくる。
            die("書き込みに失敗しました。");
        }
    }
    echo "書き込みが完了しました。";
    //fclose()関数でファイルをクローズ
    fclose($fp) or die("class.csv ファイルをオープンできません。");


?>