<?php 
    session_start();
    if(isset($_SESSION['id'])){
    	include_once "frames/feach.php";
    	echo session_abort();
    	$obj = new feach_data();
    	$obj->getinfo("Select * from ".$obj->tablename.";");
    	$subject_name = ;
    	$teacher_name = ;
    	$link_for_notes = ;
    	$creadet = ;
    }else{
    	header("Location: ../");
    }
?>