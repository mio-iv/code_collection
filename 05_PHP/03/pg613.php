<?php
    date_default_timezone_set("Asia/Tokyo");
    //
	echo date("L") . "<br>"; // 今年が閏年か？
    echo date("L", strtotime("2021-02-01")) . "<br>"; // 指定年が閏年か？
    echo date("L", mktime(0,0,0,2,1,2021)) . "<br>"; // 指定年が閏年か？

    echo date("Y") . "<br>"; // 4桁の年
    echo date("y") . "<br>"; // 下2桁の年
?>