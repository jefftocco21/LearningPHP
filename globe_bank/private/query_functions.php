<?php
    function find_all_subjects(){
        global $db; //should be avoiding globals whenever possible, need to figure out a better way to do this, maybe just leave the query in the page it is needed in.
        $sql = "SELECT * FROM subjects ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        //echo $sql; //good way to test sql
        confirm_result_set($result);
        return $result;
    }

    function find_all_pages(){
        global $db;
        $sql = "SELECT * FROM pages ";
        $sql .= "ORDER BY subject_id ASC, position ASC";
        $result = mysqli_query($db, $sql);
        echo $sql; 
        confirm_result_set($result);
        return $result; 
    }

    function update_subject($subject){
      global $db; 

      $sql = "UPDATE subjects SET ";
      $sql .= "menu_name='" . $subject['menu_name'] . "', ";
      $sql .= "position='" . $subject['position'] . "', ";
      $sql .= "visible='" . $subject['visible'] . "' ";
      $sql .= "WHERE id='" . $subject['id'] . "' ";
      $sql .= "LIMIT 1"; //make sure that only one record is edited
    
      $result = mysqli_query($db, $sql);
        //For UPDATE statements, result is true/false just like insert
        if($result){
          return true; 
        }else{
          //UPDATE failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
    }

    function insert_subject($subject) {
            global $db;
        
            $sql = "INSERT INTO subjects ";
            $sql .= "(menu_name, position, visible) ";
            $sql .= "VALUES (";
            $sql .= "'" . $subject['menu_name'] . "',";
            $sql .= "'" . $subject['position'] . "',";
            $sql .= "'" . $visible['visible'] . "'";
            $sql .= ")";
            $result = mysqli_query($db, $sql);
            // For INSERT statements, $result is true/false
            if($result) {
              return true;
            } else {
              // INSERT failed
              echo mysqli_error($db);
              db_disconnect($db);
              exit;
            }
    }
?>