<?php
require_once('../../private/initialize.php');

unset($_SESSION['username']); //unset the current value of whatever user is logged in
// or you could use
// $_SESSION['username'] = NULL;

redirect_to(url_for('/staff/login.php'));

?>
