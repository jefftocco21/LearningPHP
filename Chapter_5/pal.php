<?php
    function is_palindrome($string){
        $string = str_replace(' ', '', strtolower($string)); //make letter lowercase and remove spaces
        return ($string == strrev($string)); //will get a true or false value, in this case true because $string == strrev($string)
    }

    $check_string = 'Race Car';
    if(is_palindrome($check_string)){
        echo "<p>" . $check_string . " is a palindrome</p>";
    }
?>