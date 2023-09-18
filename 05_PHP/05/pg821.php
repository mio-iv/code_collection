<?php
    // pg821.phpに直接アクセスした場合exit()関数で表示して終了
  if(empty($_POST)){
    exit("データが入力されていないため、処理を終了します。");
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>図書館利用アンケート(確認)</title>
</head>
<body>
<h1>図書館利用アンケート確認画面</h1>
<?php
    // サニタイズ：サイバー攻撃につながるような文字を無効化
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES, "UTF-8");
    $number = mb_convert_kana($number, "n", "UTF-8");   //半角数字へ変換
    $number = str_replace(" ", "", $number);
    $number = str_replace("　", "", $number);
    $errors = array();
    if(is_numeric($number) && $number > 0){ //正の数値か
        if(($fp = fopen("./answer.csv", "r")) !== false){
            while(($data = fgetcsv($fp, 1000, ",")) !== false){
                if($data[0] == $number){
                    fclose($fp);
                    exit("学籍番号" . $number . "は回答済みです。");
                }
            }
            fclose($fp);
        }
    }else{
        $errors[] = "学籍番号を入力してください。"; //配列にエラーメッセージを格納
    }
    $faculty = htmlspecialchars($_POST['faculty'], ENT_QUOTES, "UTF-8");
    if(empty($faculty)){
        $errors[] = "所属学部を選択してください。";
    }
    $rank = @htmlspecialchars($_POST['rank'], ENT_QUOTES, "UTF-8");
    if(empty($rank)){
        $errors[] = "収蔵冊子数の充実度を選択してください。";
    }
    if(empty($_POST['use'])){
        $errors[] = "利用目的を選択してください。";
    }else{
        // implode()関数 配列の各要素の文字列を「:」区切りの一つの文字列へ
        $use = implode(":", $_POST['use']);
    }
    $use = @htmlspecialchars($use, ENT_QUOTES, "UTF-8");
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, "UTF-8");
    if(empty($comment)){
        $errors[] = "要望等を入力してください。
                    特になければ「特になし」と入力してください。";
    }
    if(@$_POST['tour'] === "on"){   //@は不必要なエラーメッセージを抑止する働き
        $tour = "図書館ツアーを希望する";
    }else{
        $tour = "図書館ツアーを希望しない";
    }
    if(count($errors) > 0){
        $errors[] = "コメントに従い該当箇所を修正してください。";
        $n = count ($errors);
            for($i = 0; $i < $n; $i++){
                echo "<font color=\"red\">" . $errors[$i] . "</font><br>";
            }
        exit;
    }
?>
 
<p>入力内容を確認してください。</p>
<!-- 確認ページ -->
<form method="post" action="pg831.php">
    <table border="1">
        <tr>
            <td>学籍番号</td>
            <td><?php echo $number; ?></td>
        </tr>
        <tr>
            <td>所属学部</td>
            <td><?php echo $faculty; ?></td>
        </tr>
        <tr>
            <td>収蔵冊子数の充実度</td>
            <td><?php echo $rank; ?></td>
        </tr>
        <tr>
            <td>利用目的(複数回答可)</td>
            <td><?php echo $use; ?></td>
        </tr>
        <tr>
            <td>図書館に対する要望等</td>
            <!-- nl2br()関数:サニタイズされている改行をHTMLの改行「<br>」へ置き換える-->
            <td><?php echo nl2br($comment, false); ?></td>
        </tr>
        <tr>
            <td>図書館ツアー</td>
            <td><?php echo $tour; ?></td>
        </tr>
    </table>
    <p><input type="submit" value="回答を送信する"></p>
    <!-- ブラウザ上へフォームを表示させない形式で値を送るために、「type="hidden"」 -->
    <input type="hidden" name="number" value="<?php echo $number; ?>">
    <input type="hidden" name="faculty" value="<?php echo $faculty; ?>">
    <input type="hidden" name="rank" value="<?php echo $rank; ?>">
    <input type="hidden" name="use" value="<?php echo $use; ?>">
    <input type="hidden" name="comment" value="<?php echo $comment; ?>">
    <input type="hidden" name="tour" value="<?php echo $tour; ?>">
</form>
</body>
</html>