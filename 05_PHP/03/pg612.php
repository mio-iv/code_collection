<?php
    date_default_timezone_set("Asia/Tokyo");
    
    echo date("F") . "<br>"; // フルスペルの今月：January から December
    echo date("M") . "<br>"; // 短縮形で今月：Jan から Dec

	echo date("m") . "<br>"; // 今月の数値表現：01 から 12
    echo date("n") . "<br>"; // 今月の数値表現：1 から 12

    echo date("t") . "<br>"; // 今月の日数：28 から 31
    //ここまで第二引数なしのため、現在時刻が割り当てられている。

    echo date("t", strtotime("2021-02-01")) . "<br>"; // 指定月の日数
    echo date("t", mktime(0,0,0,2,1,2021)) . "<br>"; // 指定月の日数
    echo cal_days_in_month(CAL_GREGORIAN,2,2021) . "<br>"; // 指定月の日数
?>