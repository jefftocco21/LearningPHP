<?php
    function find_all_subjects(){
        global $db; //should be avoiding globals whenever possible, need to figure out a better way to do this, maybe just leave the query in the page it is needed in.

        $sql = "SELECT * FROM subjects ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>