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

$year = $_POST['year'];
$month = $_POST['month'];

if(!checkdate($month, 1, $year)){
    echo "有効な年月ではありません。";	//エラー処理
    exit;
}
    
$days = array("日", "月", "火", "水", "木", "金", "土");
echo "<table border = 1>";
echo "<tr>";	//<tr>と</tr>で囲まれた範囲がテーブルの横一行
foreach($days as $day){
    echo "<th>$day</th>";	//<th>は、セルの内容が｢見出し｣
}
echo "</tr>";

$numOfWeek = date("w", mktime(0,0,0,$month,1,$year));

for($i=0; $i<$numOfWeek; $i++){
	echo "<td></td>";
}	//空白のセルを作る

//メイン
$dayInMonth = cal_days_in_month(CAL_GREGORIAN,$month,$year);
for($day=1; $day<$dayInMonth; $day++){
    echo "<td>$day</td>";
    if($numOfWeek==6){
        echo "</tr><tr>";
        $numOfWeek = 0;
    }else{
        $numOfWeek++;
    }
}

echo "<td>$day</td>";  
for($i=$numOfWeek; $i<6; $i++){	//残りのセルを埋める
	echo "<td></td>";
}
echo "</tr></table>";

?>

<p>
<a href="pg631.html">トップページへ</a>
</p>

</body>
</html>
