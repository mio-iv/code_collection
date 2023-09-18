<!-- 2021年2月のカレンダー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カレンダー</title>
</head>
<body>
<p>カレンダー</p>
<?php

$year = 2021;
$month = 2;
    
$days = array("日", "月", "火", "水", "木", "金", "土");
echo "<table border = 1>";
echo "<tr>";	//<tr>と</tr>で囲まれた範囲がテーブルの横一行
foreach($days as $day){
    echo "<th>$day</th>";	//<th>は、セルの内容が｢見出し｣
}
echo "</tr>";
//ここまで曜日表示

$numOfWeek = date("w", mktime(0,0,0,$month,1,$year));

for($i=0; $i<$numOfWeek; $i++){
	echo "<td></td>";
}	//空白のセルを作る

$dayInMonth = cal_days_in_month(CAL_GREGORIAN,$month,$year);
    //指定月の日数。整数値が返り値

for($day=1; $day<$dayInMonth; $day++){	//最終日の一日前まで
    echo "<td>$day</td>";
    if($numOfWeek==6){		//土曜日になったら
        echo "</tr><tr>";	//次の段へ
        $numOfWeek = 0;
    }else{
        $numOfWeek++;
    }
}

//まず最終日
echo "<td>$day</td>";  
for($i=$numOfWeek; $i<6; $i++){	//残りのセルを埋める
	echo "<td></td>";
}
echo "</tr></table>";

?>
</body>
</html>
