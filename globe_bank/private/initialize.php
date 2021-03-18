<?php
    //Assign file paths to php constants
    //__FILE__ returns current path to THIS file
    // dirname() returns path to parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');
    
    require_once('functions.php');
?>
