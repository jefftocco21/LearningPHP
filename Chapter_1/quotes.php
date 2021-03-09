<?php 
    $name = 'Jeff';
    //double quotes are processed
    echo "Hello, $name";

    echo "<br>";

    //singled quotes are not processed first
    echo 'Hello, $name';

    echo "<br>";
    
    //string concatenation with singles quotes
    echo 'Hello, ' . $name . '!';

    echo "<br>";
    
    //escape character
    echo 'Welcome to Jeff\'s website!';
    
    echo "<br>";

    //new line
    echo "This is line 1 \n";
    echo "This is line 2";
?>