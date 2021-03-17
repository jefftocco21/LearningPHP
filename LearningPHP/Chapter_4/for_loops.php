<?php
    //this print 0-9, checks conditon before jumping into for loop
    for($i=0; $i<10; ++$i){
        echo "<p>$i</p>";
    }

    $colors = array('red', 'blue', 'green');

    for ($i=0; $i < sizeof($colors); ++$i){
        //echo '<p>' . $colors[$i] . '</p>';
    }
?>