<?php
    date_default_timezone_set("Asia/Tokyo");
    echo date("e") . "<br>"; // タイムゾーン
    echo date("O") . "<br>"; // グリニッジ標準時 (GMT) との時差
    echo date("c") . "<br>"; // 日付
    echo date("r") . "<br>"; // 日付
    echo date("U") . "<br>"; // Unix Epoch(1970年1月1日0時0分0秒) からの秒数
?>