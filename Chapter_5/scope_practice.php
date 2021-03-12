<?php
    //passing a variable by value, meaning that the value of $a is still going to be 5 and we are simply return an operation done on that value
    function double($a){
        return $a *= 2;
    }

    //this will change the value of a by adding the &$a
    //passing by value is changing copy, passing reference is changing original
    function triple(&$a){
        $a *= 3;
    }

    function quad(){
        global $a; //gobally scoped variable
        $a *= 4;
    }

    $a = 5;
    echo double($a);

    echo "<p>$a</p>";

    triple($a);
    
    echo "<p>$a</p>";

    $numbers = array(1, 2, 3);
    foreach ($numbers as &$num){
        triple($num);
    }
    
    print_r($numbers);

    $a = 5;
    quad($a);
    echo("<p>$a</p>");
?>