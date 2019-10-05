<?php 
    session_start();
    if(isset($_SESSION['id'])){
      include_once "frames/feach.php";
      $id = $_SESSION['id'];
      $obj = new feach_data();
      $row = $obj->getinfo("Select * from ninjaart WHERE id = \"$id\";");
      $fname = $row['fname'];
      $lname = $row['lname'];
      $Branch = $row['branch'];
      $sem = $row['sem'];
      /*$subject_name = ;
      $teacher_name = ;
      $link_for_notes = ;
      $creadet = ;*/
    }else{
      header("Location: ../");
    }
?>