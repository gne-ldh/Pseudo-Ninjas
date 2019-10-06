<?php 
	
	include_once "dbconn.php";
	$name = $_POST['uname'];
	$pass = $_POST['lpassword'];

	if(empty($name) or empty($pass)){
		header("Location: index.php?wrong=empty");
	}elseif (condition) {
        $sql = "SELECT * FROM `Admin`
        WHERE uname = \"$name\" and password = \"$pass\"";
        $result = mysqli_query($conn,$sql) 
        or die(header("Location: index.php?wrong=not"));
        $row = mysqli_fetch_array($result);
        if(empty($name) || empty($pass)){
            header("Location: index.php?wrong=empty");
        }else if($name == $row["uname"] && $pass == $row["password"]){
            header("Location: adminpage.php");
        }else{
            header("Location: index.php?wrong=not");
        }           
    }else{
            header("Location: index.php?wrong=nc");
	     }
