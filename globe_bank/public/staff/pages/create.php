<?php require_once('../../../private/initialize.php'); 


if(is_post_request()){
    $menu_name = $_POST['menu_name'] ?? '';
    $visible = $_POST['visible'] ?? '';
    $position = $_POST['position'] ?? '';
}

if(is_get_request()){
    $menu_name = $_GET['menu_name'] ?? '';
    $visible = $_GET['visible'] ?? '';
    $position = $_GET['position'] ?? '';
}
redirect_to(url_for('/staff/pages/new.php'));

//echo 'Testing output';
?>