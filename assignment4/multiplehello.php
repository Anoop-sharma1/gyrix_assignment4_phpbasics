<?php 
    $num = 25;

    for($i =1 ; $i <= $num ; $i++) {
        if($i % 3 == 0 && $i % 5 ==0) {
            echo "<h3 style='color : blue;'>$i Hello World</h3>";
        }

        else if($i % 3 == 0) {
            echo "<h3 style='color : green;'>$i Hello World</h3>"; 
        }

        else if($i % 5 == 0) {
            echo "<h3 style='color : red;'>$i Hello World</h3>"; 
        }


        else {
            echo "<h3 style='color : yellow;'>$i Hello World</h3>";  
        }
    }
?>