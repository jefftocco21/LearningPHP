<?php
    //readfile('treasure-island.txt'); //will print out entire file as raw text

    //echo file_get_contents('treasure-island.txt'); //will strip all formatting of the text

    //stores each line as an array and prints out each one as its own index
    //$lines = file('treasure-island.txt');
    //var_dump($lines);

    //will get the html of a webpage and print it as a line
    $print = file_get_contents('https://google.com');
    var_dump($print);
?>