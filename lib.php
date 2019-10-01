<?php

define('DS', '/');

function menu($menu){
    echo '<ul>';
    foreach($menu as $key => $value){
        echo sprintf('<li> <a href="?id=%s"> %s </a> </li>', $key, $value);
    }
    echo '</ul>';
}


/*function tablemul($x, $y, $color = 'aqua'){
    echo "<table border='10'>";
    for($i = 1; $i < $x; $i++){
        echo "<tr>";
        for($j = 1; $j < $y; $j++){
            if($i == 1 || $j == 1){
                echo "<td bgcolor='$color'>" . $i*$j . "</td>";
            } else{
                echo "<td>" . $i*$j . "</td>";
            }
        }
        echo '</tr>';
    }
    echo "</table>";
}

tablemul(15, 15, 'red');*/