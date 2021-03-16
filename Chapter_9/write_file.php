<?php
    $text = file_get_contents('treasure-island.txt');

    echo file_put_contents('ti-copy.txt', $text); //will create a new file or overwrite whatever exists 
    //echo file_put_contents('ti-copy.txt', $text, FILE_APPEND); //file_append here will add to on to whatever exsits
?>