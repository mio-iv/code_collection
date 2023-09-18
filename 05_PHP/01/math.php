<?php
    $ans = (int)$_POST['ans'];
    if($ans == 7){
        echo "正解です";
    }else{
        echo "残念。<br>";
        echo "戻るボタンで戻りましょう。";
    }

?>