<?php
    $colors = array('red', 'blue', 'green');

    //foreach loop will take care of incrementing the array for us
    foreach($colors as $color){
        echo "<p>$color</p>";
    }

    $home_towns = array(
        'Jeff' => 'Plymouth, MA',
        'Raks' => 'Randolph, MA',
    );

    //same thing done for associative arrays
    foreach($home_towns as $name => $town){
        echo "<p>$name lives in $town</p>";
    }

?>