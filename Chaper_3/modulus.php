<?php
    //checking if a number is even or odd using modulus
    $a=5;
    if ($a % 2 == 0){
        echo "<p>$a is even.</p>";
    }else{
        echo "<p>$a is odd";
    }

    $a=15;
    $b=5;

    //check to see if $b is a factor of $a
    echo ($a % $b == 0) ? "<p>$b is a factor of $a</p>" : "<p>$b is not a factor of $a";

    //negate the remainder
    echo -$a % 2; 
?>