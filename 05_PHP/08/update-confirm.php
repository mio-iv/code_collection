<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" >
  <title>電子会議システム</title>
</head>
<body>
<?php
    //初期設定
    mb_internal_encoding("UTF-8");
    session_start();
    //文字列洗浄
    $name = htmlspecialchars(str_replace(" ", "", $_POST["name"]), ENT_QUOTES, "UTF-8");
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");
    $passwd = htmlspecialchars($_POST["passwd"], ENT_QUOTES, "UTF-8");
    //db接続
    include "db_connect.php";
    doDB();
    //idセッションから取得
    $id = $_SESSION["id"];  //セッション変数として保存されている
    
    //DBへクエリ送信、データ取得
    $sql = "select * from discussion where (id='$id')";
    $query = mysqli_query($mysqli, $sql) or die("fail 1");
    $data = mysqli_fetch_array($query);
    
    //パスワードチェック
    if(strcmp($data["passwd"], $passwd) != 0){
        exit("パスワードが違います。<br>
              ブラウザの戻るボタンをクリックして前画面に戻り、
              パスワードを正しく入力してください。");
      }    

    $_SESSION["name"] = $name;
    $_SESSION["message"] = $message;
    mysqli_close($mysqli);

?>

<p>変更確認画面</p>
<form method="POST" action="update-submit.php">
    <table border="1">
        <tr>
            <td>名前</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>更新日時</td>
            <td><?php echo $data["modified"]; ?></td>
        </tr>
        <tr>
            <td>メッセージ</td>
            <td><?php echo nl2br($message); ?></td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit" value="変更する">
            </td>
        </tr>
    </table>
</form>
</body>
</html>