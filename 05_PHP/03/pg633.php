<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>カレンダー</title>
</head>
<body>
    
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
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

<p>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']?>">
<!-- 自分自身がpostメゾッドで動いたとき -->
<select name="year">
<?php
    for($i = $thisYear-5; $i <= $thisYear+5; $i++){
        echo "<option value=$i";
        if($i==$year){
        	echo " selected";
        }else{
        	echo ">$i</option>";
        }
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
</body>
</html>