<?php
    echo "<table border=1>";
    for ($row = 0; $row <10; $row++){
        echo "<tr>";

        for ($col = 1; $col <= 5; $col++){
            echo "<td>" , ($col + ($row * 5)) , "." , "</td>";
        }
        echo "</tr>";
    }                
    echo "</table>";
    ?>