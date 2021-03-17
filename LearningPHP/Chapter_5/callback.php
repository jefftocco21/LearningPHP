<?php
    $names = array('Jeff', "Joe", "Jon");

    usort($names, function($a, $b){
        return $a[1] <=> $b[1]; //if value of $a[1] is >= $b[1] return $a[1] otherwise return $b[1]
    });

print_r($names);
?>