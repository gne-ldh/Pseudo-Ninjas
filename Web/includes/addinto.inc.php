<?php 
include_once "dbconn.inc.php";
session_start();

class error_handle{
    public function gotoerror(){
            header("Location: ../error_time.php?wrong=database_conection_error");
    }
    public function login_data($rollno,$upassword,$tablename,$conn){
        $sql = "SELECT * FROM `ninjaart`
        WHERE rollno = \"$rollno\" and upassword = \"$upassword\"";
        $result = mysqli_query($conn,$sql) 
        or die("Failed to connect with server!!".$this->gotoerror());
        $row = mysqli_fetch_array($result);
        return $row;
    }
    protected function remember_me($conn,$id){
          $sql = "SELECT `id` FROM `ninjaart` 
        WHERE email=$email AND phone=$phone AND rollno=$rollno";
    }
    private function check_detail($conn,$email,$phone,$rollno){
        $sql = "SELECT `id` FROM `ninjaart` 
        WHERE email=$email AND phone=$phone AND rollno=$rollno";
        /* under this definate thing work if any error accur go bak to error_time*/
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch($result);
        return $row;
    }
    public function insert_into_data_if_ok($conn,$id,$fname,$lname,$upassword,$rollno,$email,$phone,$sem,$branch){
             /*
                *check for unique number  if enter
                *check for unique id
                *check for unique Email
                add logic to enter data into database
            */
            $sql="INSERT INTO `ninjaart`(`id`, `fname`, `lname`, `rollno`, `upassword`, `email`, `phone`, `sem`, `branch`) 
            VALUES ($id,\"$fname\",\"$lname\",\"$rollno\",\"$upassword\",\"$email\",\"$phone\",$sem,\"$branch\")";
            mysqli_query($conn,$sql) or die(header("Location: ../signup.php?wrong=insertion_problem"));
            $row = login_data($rollno,$upassword,$tablename,$conn);
            if(mysql_fetch_row($row)>0){
                $_SESSION["id"] = $id;
                echo "this";
                //header("Location: ../mainframe/index.php");/*use id to make take advantage of session*/;
            }else{
                header("Location: ../signup.php?wrong=bad");
            }
    }
}

    $obj = new error_handle();

    if(isset($_GET['report'])){
        echo "this";
        $id=$_GET['xb'];
        $_SESSION["id"] = $id;
        header("Location: ../mainframe/index.php");
    }else if(isset($_POST["submit"])){
        /*
            add logic to check in login
        */
        $rollno = strtolower($_POST["rollno"]);
        $upassword = $_POST["lpassword"];
        $row = $obj->login_data($rollno,$upassword,$tablename,$conn);
         /* under this definate thing work if any error accur go bak to error_time*/
        if(empty($rollno) || empty($upassword)){
            header("Location: ../index.php?wrong=empty");
        }
        else if($row["rollno"]==$rollno && $row["upassword"]==$upassword){
            $_SESSION["id"] = $row["id"];
            if(isset($_POST['remember_me'])){
                $_SESSION["I_remember"] = $row["id"];
            }
            /*use id to make take advantage of session*/;
            header("Location: ../mainframe/index.php");
        }else{
            header("Location: ../index.php?wrong=not");
        }       
    }
    else if(isset($_POST["signup"])){
        $id = 1;
        $rollno = strtolower($_POST['rnumber']);
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $upassword = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $sem = $_POST["sem"];
        $branch = $_POST["branch"];
        $obj->insert_into_data_if_ok($conn,$id,$fname,$lname,$upassword,$rollno,$email,$phone,$sem,$branch);    
    }
    else{
        $te="wrong way";
        header("Location: ../error_time.php?wrong=".$te);
    }