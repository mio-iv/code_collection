<?php
    date_default_timezone_set("Asia/Tokyo");
    echo date("d") . "<br>"; // 今日の日にち：01 から 31
    echo date("j") . "<br>"; // 今日の日にち：1 から 31
	
	echo date("D") . "<br>"; // 今日の曜日：Mon から Sunの3文字形式
    echo date("l") . "<br>"; // 今日の曜日：Sunday から Saturday

    echo date("N") . "<br>"; // 曜日の数値表現：1(月曜日)から7(日曜日)
    echo date("w") . "<br>"; // 曜日の数値表現：0(日曜日)から6(土曜日)
    echo date("w", mktime(0,0,0,2,1,2021)) . "<br>"; // 指定日の曜日

	echo date("S") . "<br>"; // 序数を表すサフィックス：st, nd, rd または th
    echo date("z") . "<br>"; // 通算日：0 から 365
?>
