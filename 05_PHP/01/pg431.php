<?php
    $ans = $ansErr = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['ans'])){
            $ansErr = "答えを入力してください。";
        }elseif(is_numeric($_POST['ans'])){
            $ans = (int)$_POST['ans'];
            if($ans == 7){
                echo "<span style=\"color:blue\">正解です。</span>";
            }else{
                echo "<span style=\"color:red\">残念でした。</span>";
            }
        }else{
            $ans = $_POST['ans'];
            $ansErr = "数値を入力してください。";
        }
        if(!empty($ansErr)){
        echo "<span style=\"color:red\">$ansErr</span>";
            }
    }
?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム処理</title>
</head>
<body>
    <h2>計算問題を使ったフォーム処理</h2> 
    <p>計算結果を半角数字で入力してください。</p>
    <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
        1+2*3=<input type="text" name="ans" value="<?php echo $ans; ?>"><br><br>
        <input type="submit" value="確認">
    </form>
    </body> 
    </html> 
</body>
</html>