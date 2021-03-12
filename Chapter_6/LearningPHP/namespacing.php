<?php
include 'new_namespace.php'; //including the file that contains the new namespace

function double($a){
    return $a + 2;
}

echo '<p>' . double(5) . '</p>';

echo '<p>' . learningPHP\double(5) . '</p>' //using the function that was declared and defined in the new_namespace.php file under a different namespace;
?>
