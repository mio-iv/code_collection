<?php
    if(empty($_POST)){
        exit("データが入力されていないため、処理を終了します。");
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>図書館利用アンケート(回答完了)</title>
</head>
<body>
<h1>図書館利用アンケート回答完了画面</h1>
<?php
    //サニタイズ
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES, "UTF-8");
    $faculty = htmlspecialchars($_POST['faculty'], ENT_QUOTES, "UTF-8");
    $rank = htmlspecialchars($_POST['rank'], ENT_QUOTES, "UTF-8");
    $use = htmlspecialchars($_POST['use'], ENT_QUOTES, "UTF-8");
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, "UTF-8");
    $tour = htmlspecialchars($_POST['tour'], ENT_QUOTES, "UTF-8");
    $date_time = date("Y-m-d/H:i:s");   //現在の年月日と時分秒の情報
 
    $line = array($number, $faculty, $rank, $use,
        $comment, $tour, $date_time);
 
    $file_name = "./answer.csv";
    $fp = fopen($file_name, "a");
    $success = fputcsv($fp, $line); 
    //fputcsv()関数:書き込んだ文字列の長さを返す。書き込みに失敗時は「false」を返す
    fclose($fp);
 
    if($success){
        $message = "回答を受け付けました。ありがとうございました。";
    }else{
        $message = "エラーが発生しました。";
    }
    echo "<p>$message</p>";
?>
</body>
</html>