<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カレンダー</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $month = $_POST['month'];
    $year = $_POST['year'];
}else{
    $month = date("n");
    $year = date("Y");
}

if(!checkdate($month, 1, $year)){
    echo "有効な年月ではありません。";
    exit;
}
?>
<p>カレンダー</p>
<p>
表示年月を修正して、表示ボタンを押してください。
</p>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
<input type="text" name="year" style="width:50px" value="<?php echo $year ?>">年
<input type="text" name="month" style="width:30px" value="<?php echo $month ?>">月
<input type="submit" value="表示">
</form>
<br>
<?php
$days = array("日", "月", "火", "水", "木", "金", "土");
echo "<table border = 1>";
echo "<tr>";
foreach($days as $day){
    echo "<th>$day</th>";
}
echo "</tr>";
echo "<tr>";
$numOfWeek = date("w", mktime(0, 0, 0, $month, 1, $year));
for($i = 0; $i < $numOfWeek; $i++){
    echo "<td></td>";
}
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
for($day = 1; $day < $daysInMonth; $day++){
    echo "<td>$day</td>";
    if($numOfWeek == 6){
        echo "</tr><tr>";
        $numOfWeek = 0;
    }else{
        $numOfWeek++;
    }
}
echo "<td>$day</td>";
for($i = $numOfWeek; $i < 6; $i++){
    echo "<td></td>";
}
echo "</tr></table>";
?>
</body>
</html>