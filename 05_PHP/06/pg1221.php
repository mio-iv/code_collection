<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MariaDBへの接続と切断</title>
</head>
<body>
<?php
    $database = "student_sample";
    $con = mysqli_connect("localhost", "student", "student999")
        or die("接続に失敗しました。");
    echo "MariaDBへの接続に成功しました。<br>";

    mysqli_select_db($con, $database)
        or die($database . "に接続できません。");
    echo "データベース " . $database . " に接続しました。<br>";
    
    mysqli_set_charset($con, "utf8mb4");

    mysqli_query($con, "insert into test (name, day, temp)
                    values ('gifu', '2020-12-26', 9.1)")
            or die("データを登録できませんでした。");
    echo "データを登録しました。<br>";
 
    if(mysqli_close($con)){
        echo "MariaDBとの接続を切断しました。<br>";
    }else{
        echo "MariaDBとの切断に失敗しました。<br>";
    }
?>
</body>
</html>