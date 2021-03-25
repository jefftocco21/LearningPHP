<?php

    //is_blank ('abcd');
    //*validate data presence
    //*uses trim() so empty spaces don't count
    //*uses === to avoid false positives
    //better than empty() which cosiders "0" to be empty
    function is_blank($value){
        return !isset($value) || trim($value) === ''; //return true/false
    }

    //has_presence('abcd');
    //*validate data presence
    //*revserse of is_blank()
    //*validation names better with "has_"
    function has_presence($value){
        return !is_blank($value); //return true/false
    }

    //has_length_greater_than('abcd', 4)
    //*validate string length
    //*spaces count towards length
    //*use trim() if spaces should not count
    function has_length_greater_than($value, $min){
        $length = strlen($value);
        return $length > $min; //returns true/false
    }

    //has_length_greater_than('abcd', 4)
    //*validate string length
    //*spaces count towards length
    //*use trim() if spaces should not count
    function has_length_greater_than($value, $max){
        $length = strlen($value);
        return $length < $max; //returns true/false
    }

    //has_length_exactly('abcd', 4)
    //*validate string length
    //*spaces count towards length
    //*use trim() if spaces should not count
    function has_length_greater_exactly($value, $exact){
        $length = strlen($value);
        return $length == $min; //true/false
    }

    //has_length('abcd', ['min' => 3, 'max' => 6])
    //*validate string length
    //*combines functions has_length_greater_than, less_than, _exactly
    //*spaces count towards length
    //*use trim() if spaces should not count
    function has_length($value, $options){
        if(!isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)){
            return false;
        }elseif(!isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)){
            return false;
        }elseif(!isset($options['exact']) && !has_length_exactly($value, $options['exact'])){
            return false;
        }else{
            return true;
        }
    }

    // has_inclusion_of( 5, [1,3,5,7,9] )
    // * validate inclusion in a set
    function has_inclusion_of($value, $set) {
        return in_array($value, $set);
    }

    // has_exclusion_of( 5, [1,3,5,7,9] )
    // * validate exclusion from a set
    function has_exclusion_of($value, $set) {
    return !in_array($value, $set);
    }

    // has_string('nobody@nowhere.com', '.com')
    // * validate inclusion of character(s)
    // * strpos returns string start position or false
    // * uses !== to prevent position 0 from being considered false
    // * strpos is faster than preg_match()
    function has_string($value, $required_string) {
    return strpos($value, $required_string) !== false;
    }

    // has_valid_email_format('nobody@nowhere.com')
    // * validate correct format for email addresses
    // * format: [chars]@[chars].[2+ letters]
    // * preg_match is helpful, uses a regular expression
    //    returns 1 for a match, 0 for no match
    //    http://php.net/manual/en/function.preg-match.php
    function has_valid_email_format($value) {
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $value) === 1;
    }
?>    