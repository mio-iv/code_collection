<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>検索結果の出力</title>
</head>
<body>
<?php
    //DB設定
    $database = "student_sample";  
    //サーバー接続
    $con = mysqli_connect("localhost", "student", "student999")
        or die("接続に失敗しました。");
    echo "MariaDBへの接続に成功しました。<br>";
    //DB接続
    mysqli_select_db($con, $database)
        or die($database . "に接続できません。");
    echo "データベース " . $database . " に接続しました。<br>";
    //文字コードセット
    mysqli_set_charset($con, "utf8mb4");
    //SQL発行
    $query = mysqli_query($con, "select * from test")
        or die("検索に失敗しました。");
    echo '<p><table border="1">';
    //結果セット抽出
    while($data=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>" . $data[0] . "</td>" .
            "<td>" . $data[1] . "</td>" .
            "<td>" . $data["day"] . "</td>" .
            "<td>" . $data["temp"] . "</td>";
        echo "</tr>";
    }
    echo "</table></p>";
    //サーバー切断
    if(mysqli_close($con)){
        echo "MariaDBとの接続を切断しました。<br>";
    }else{
        echo "MariaDBとの切断に失敗しました。<br>";
    }
?>
</body>
</html>