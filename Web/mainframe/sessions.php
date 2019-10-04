<?php 
    session_start();
    if(isset($_SESSION['id'])){
    	/*include_once "frames/feach.php";
    	echo session_abort();
    	$obj = new feach_data();
    	$obj->getinfo("Select name sem branch from ".$obj->tablename.";");*/
    }else{
    	header("Location: ../");
    }
?>