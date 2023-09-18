<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>図書館利用アンケート(集計)</title>
</head>
<body>
<h1>図書館利用アンケート集計画面</h1>
<?php
    if(($fp = fopen("./answer.csv", "r")) !== false){
        $faculties = array("教育学部" => 0, "文学部" => 0, "経済学部" => 0,
                        "工学部" => 0, "理学部" => 0, "農学部" => 0);
        $rank = array("満足" => 0, "やや満足" => 0, "普通" => 0,
                        "やや不満" => 0, "不満" => 0);
        $use = array("個人学習" => 0, "書籍を借りる" => 0, "資料等の複写" => 0,
                        "グループ学習" => 0, "その他" => 0);
        $tourYes = $tourNo = 0;
        $titles = array("学籍番号", "所属学部", "充実度", "利用目的（複数回答）",
                        "要望等", "図書館ツアー", "回答日時");
        echo "<table border = 1>";
        echo "<tr>";
        foreach($titles as $title){
            echo "<th>$title</th>";
        }
        echo "</tr>";
        while(($data = fgetcsv($fp, 1000, ",")) !== false){
            echo "<tr>";
                echo "<td>" . $data[0] . "</td>";
                echo "<td>" . $data[1] . "</td>";
                $faculties[$data[1]] = $faculties[$data[1]] + 1;
                echo "<td>" . $data[2] . "</td>";
                $rank[$data[2]] = $rank[$data[2]] + 1;
                echo "<td>" . $data[3] . "</td>";
                $dataUse = explode(":", $data[3]);
                foreach($dataUse as $dataUseChek){
                    $use[$dataUseChek] = $use[$dataUseChek] + 1;
                }
                echo "<td>" . nl2br($data[4], false) . "</td>";
                if($data[5] === "図書館ツアーを希望する"){
                    echo "<td>希望する</td>";
                    $tourYes = $tourYes + 1;
                }else{
                    echo "<td>希望しない</td>";
                    $tourNo = $tourNo + 1;
                }
                echo "<td>" . $data[6] . "</td>";
            echo "</tr>";
        }
        echo "</table>";  
        echo "<p>$titles[1]<br>";
        foreach($faculties as $key => $cnt){
            echo "{$key}：" . $cnt . "人 , ";
        }
        echo "</p>";
        echo "<p>$titles[2]<br>";
        foreach($rank as $key => $cnt){
            echo "{$key}：" . $cnt . "人 , ";
        }
        echo "</p>";
        echo "<p>$titles[3]<br>";
        foreach($use as $key => $cnt){
            echo "{$key}：" . $cnt . "人 , ";
        }
        echo "</p>";
        echo "<p>$titles[5]<br>";
        echo "希望する：" . $tourYes . "人 , ";
        echo "希望しない：" . $tourNo . "人";
        echo "</p>";
        fclose($fp);
    }
?>
</body>
</html>