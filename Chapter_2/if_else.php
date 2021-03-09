<?php
if ( 10 < 1 ) {
	echo '<p>we stopped at if</p>';
} else if ( 10 < 4 ) {
	echo '<p>we stopped at the first else if.</p>';
} else if ( 10 < 11 ) {
	echo	'<p>we stopped at the second else if</p>';
} else if ( 10 < 20 ) {
	echo '<p>we stopped at the 3rd else if</p>';
} else {
	echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}
 
$is_logged_in = true;
if ($is_logged_in){
    echo "<h3>Welcome back, user!</h3>";
}else {
    echo "<h3>Welcome to the site!</h3>";
}

'<br>';

$is_logged_in = false;
$message = "Welcome " . ($is_logged_in ? "back!" : "!"); //since $is_logged_in is false, only the ! will show up in this ternary operator
echo $message;

'<br>';

$name = isset($name) ? $name : ' Joe'; //if joe is already set print the name, otherwise assign joe to the name
echo $name; 

//elvis ternary
 echo '<br>';
$newname = null;
$newname = $newname ?: 'Jeff'; //even shorter way to do the ternary assignment above
echo $newname;

?>