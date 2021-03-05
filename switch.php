<?php

$total = 10; 
switch ($total) {
    case 1: 
    case 2:
    case 3: 
    case 4: 
        echo '<p>$total is less than 5</p>';
        break; //breaks are crucial, and cases can be grouped
    default: 
        echo '<p>$total is 5 or more</p>';
}

?>