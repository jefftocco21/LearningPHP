<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <?php include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">

    <?php 
    //Show the homepage
    //Homepage is able to:
    // *be static content (either in this location or through the use of another shared file)
    // *show the first page from the navigation menu
    // * be in the database but add code to hide in the nav
    include(SHARED_PATH . '/static_homepage.php');
    ?>
  
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
