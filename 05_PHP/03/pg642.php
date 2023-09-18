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
$thisYear = date("Y");
?>
<p>カレンダー</p>
<p>
表示年月を修正して、表示ボタンを押してください。
</p>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
<select name="year">
<?php
for($i = $thisYear - 5; $i <= $thisYear + 5; $i++){
    echo "<option value=$i";
    if($i == $year){
        echo " selected";
    }
    echo ">$i</option>";
}
?>
</select>年
<select name="month">
<?php
for($i = 1; $i <= 12; $i++){
    echo "<option value=$i";
    if($i == $month){
        echo " selected";
    }
    echo ">$i</option>";
}
?>
</select>月
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