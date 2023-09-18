<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>検索時の注意点</title>
</head>
<body>
<?php
	$database = "student_sample";
    $con = mysqli_connect("localhost", "student", "student999")
        or die ("接続に失敗しました。");
    echo "MariaDBへの接続に成功しました。<br>";
    mysqli_select_db($con, $database)
        or die($database . "に接続できません。");
    echo "データベース " . $database . " に接続しました。<br><br>";
    mysqli_set_charset($con, "utf8mb4");
 
    $input = '5 or 5=5';
    echo "検索内容は " . $input . "<br>";
    echo "SQLのリクエストは " . "select * from test where num = $input" . "<br>";
 
    echo "<br>正規表現あり<br>";
    if(preg_match("/[^0-9]/", $input)){
        echo "数字以外は入力しないでください。<br>";
    }else{
        $query = mysqli_query($con, "select * from test where num = $input")
                or die("検索に失敗しました。");
        while($data = mysqli_fetch_array($query)){
        echo $data[0] . " " . $data[1] . " " .
            $data["day"] . " " . data["temp"] . "<br>";
        }
    }
 
    if(mysqli_close($con)){
        echo "<br>MariaDBとの接続を切断しました。<br>";
    }else{
        echo "<br>MariaDBとの切断に失敗しました。<br>";
    }
?>
</body>
</html>