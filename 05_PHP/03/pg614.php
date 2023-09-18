<?php
    date_default_timezone_set("Asia/Tokyo");
    echo date("a") . "<br>"; // amまたはpm（小文字）
    echo date("A") . "<br>"; // AMまたはPM（大文字）

    echo date("g") . "<br>"; // 12時間単位の時間：1から12
    echo date("h") . "<br>"; // 12時間単位の時間：01から12

	echo date("G") . "<br>"; // 24時間単位の時間：0から23
    echo date("H") . "<br>"; // 24時間単位の時間：00から23

    echo date("i") . "<br>"; // 分：00から59
    echo date("s") . "<br>"; // 秒：00から59
?>