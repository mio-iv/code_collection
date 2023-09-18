<?php
    $fp = fopen("class.csv", "r")
        or die("ァイルをオープンできません。");

    echo "<table border=\"1\">";

    while($csv_line = fgetcsv($fp, 1024, ",")){
        echo "<tr>";
        for($i = 0, $j = count($csv_line); $i < $j; $i++){
            //<td>はタブ
            echo "<td>" . htmlentities($csv_line[$i]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    fclose($fp) or die("ファイルをクローズできません。");
?>