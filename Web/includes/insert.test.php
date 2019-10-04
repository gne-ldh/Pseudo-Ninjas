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

	$row = login_data($rollno,$upassword,$tablename,$conn);
    mysqli_query($conn,$sql) or die(test());
         /* under this definate thing work if any error accur go bak to error_time*/
    $row=login_data("17bt020327","xyz","ninjaart",$conn);

    $flag[] = $row;

    print(json_encode($flag));

        if(empty($rollno) || empty($upassword)){
            header("Location: ../index.php?wrong=empty");
        }
        else if($row["rollno"]==$rollno && $row["upassword"]==$upassword){
            $_SESSION["id"] = $row["id"];
            /*use id to make take advantage of session*/;
            header("Location: ../mainframe/index.php");
        }else{
            header("Location: ../signup.php?wrong=not");
        }       