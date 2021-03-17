<?php
    $i=10;

    do{
        echo "<p>$i</p>"; //print out $i BEFORE incrementing
        $i++; //increment i
    } while ($i < 10); //then check condition meaning it will not run again

    while ($i < 10){ //never <10 to begin with, will not execute
        echo "<p>$i</p>";
        $i++;
    }
    //do while is when it should executre at least once, while loop has possibility to never execute
?>
