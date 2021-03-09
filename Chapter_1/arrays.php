<?php

//Indexable Array
$colors = array('red', 'blue', 'green');

//print the arrays and their indexes
print_r($colors);

//retrive a specific element by index
echo $colors[1];

$colors[] = 'yellow';

//adding an element
print_r($colors);

echo "<br>";

//associative array
$home_towns = array(
    'Jeff' => 'Plymouth, MA',
    'Raks' => 'Randolph, MA',
);

echo "<pre>";
print_r($home_towns);
echo "</pre>";

//print the element (hometown) that corresponds to (Jeff) index
echo '<p>' . $home_towns['Jeff'] . '</p>';

//multidimensional arrays
$brothers = array(
    'Jeff' => array(
        'age' => 25,
        'state' => 'MA',
    ),
    'Dan' => array(
        'age' => 22,
        'state' => 'MA',
    ),
);

echo '<pre>';
print_r($brothers);
echo '</pre>';

//Jeff is a key that points to another array, so grab another key for multidimensional arrays
echo '<p>' . $brothers['Jeff']['age'] . '</p>';