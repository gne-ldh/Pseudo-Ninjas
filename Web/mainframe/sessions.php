<?php 
    session_start();
    if(isset($_SESSION['id'])){
      include_once "frames/feach.php";
      $obj = new feach_data();
      $row = $obj->getinfo("Select * from ".$obj->tablename.";");
      /*$subject_name = ;
      $teacher_name = ;
      $link_for_notes = ;
      $creadet = ;*/
    }else{
      header("Location: ../");
    }
?>