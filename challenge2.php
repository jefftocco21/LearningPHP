<?php
$min = 1; 
$max = 50;
$guess = rand($min, $max);
$num = rand($min, $max);

if ($guess == $num){
    echo "your guess: " . $guess . " it was ". $num . " nice guess";
} elseif ($guess > $num){
    echo "your guess: " . $guess . " it was ". $num . " too high";
} elseif ($guess < $num){
    echo "your guess: " . $guess . " it was ". $num . " too low";
} else{
    echo 'out of range';
}
?>