<?php
   $a = 5;
   //is going to print the value of a, 5, THEN increment
   echo 'The value of $a is ' . $a++ . '<br/>';
   //is going to print 6, since it has been incremented since the last time $a was printed
   echo 'Now $a is ' . $a . '<br/>';

   $b = 5;
   //print the current value of $b, 5, THEN increment
   echo 'The value of $b is ' . ++$b . '<br/>';
   //print the value of $b, 6, since it has not been increment since the last time it was printed
   echo 'Now $b is ' . $b . '<br/>';

   //prints D
   $c = 'C';
   echo '$c is ' . ++$c . '<br/>';

   ?>