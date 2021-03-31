<navigation>
  <?php $nav_subjects = find_all_subjects(); //query function to find all subjects ?>
  <ul class="subjects">
    <?php while($nav_subject = mysqli_fetch_assoc($nav_subjects)) { //result set called $nav_subjects specifically for navigation purposes?>
      <li>
        <a href="<?php echo url_for('index.php'); ?>">
          <?php echo h($nav_subject['menu_name']); ?>
        </a>

        <?php $nav_pages = find_pages_by_subject_id($nav_subject['id']); //query function to find all pages by subject_id ?>
        <ul class="pages">
          <?php while($nav_page = mysqli_fetch_assoc($nav_pages)) { //result set called $nav_subjects specifically for navigation purposes?>
            <li class="<?php if($nav_page['id']==$page_id) {echo "selected";} ?>">
              <a href="<?php echo url_for('index.php?id=' . h(u($nav_page['id']))); ?>">
                <?php echo h($nav_page['menu_name']); ?>
              </a>
            </li>
          <?php } // while $nav_pages ?>
        </ul>
        <?php mysqli_free_result($nav_pages); ?>

      </li>
    <?php } // while $nav_subjects ?>
  </ul>
  <?php mysqli_free_result($nav_subjects); ?>
</navigation>

