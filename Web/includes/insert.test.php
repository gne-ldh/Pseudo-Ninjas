<?php
	include_once "dbconn.inc.php";
	function test(){
		header("Location: ../signup.php?wrong=insertion_problem");
	}
	function login_data($rollno,$upassword,$tablename,$conn){
        $sql = "SELECT * FROM `ninjaart`
        WHERE rollno = \"$rollno\" and upassword = \"$upassword\"";
        $result = mysqli_query($conn,$sql) 
        or die("Failed to connect with server!!".$this->gotoerror());
        $row = mysqli_fetch_array($result);
        return $row;
    }
	$id = 3;
    $rollno = strtolower($_POST['rnumber']);
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $upassword = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sem = $_POST["sem"];
    $branch = $_POST["branch"];
	$sql="INSERT INTO `ninjaart`(`id`, `fname`, `lname`, `rollno`, `upassword`, `email`, `phone`, `sem`, `branch`) 
			VALUES ($id,\"$fname\",\"$lname\",\"$rollno\",\"$upassword\",\"$email\",\"$phone\",$sem,\"$branch\")";
            
    mysqli_query($conn,$sql) or die(test());
	$row = login_data($rollno,$upassword,$tablename,$conn);
         /* under this definate thing work if any error accur go bak to error_time*/
        if($row["rollno"]==$rollno && $row["upassword"]==$upassword){
            $_SESSION["id"] = $row["id"];
            /*use id to make take advantage of session*/;
            header("Location: ../mainframe/index.php");
        }else{
            header("Location: ../signup.php?wrong=not");
        }       