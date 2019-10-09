<?php
	include_once "dbconn.php";
	class work{

		public function throw_error($location,$msg_code){
			if(empty($location)||empty($msg_code)){
				echo '<script>
					alert("Some thing went wrong. Contect with your developer!!");
				</script>';
			}				
			else{
				header("Location: ".$location."?".$msg_code);
			}
		}	

		public function nonreturn($conn,$query,$msg1){
			$result = mysqli_query($conn,$query) or die($this->throw_error("adminpg.php","lwn=011&msg=".$msg1));//121 line walking navigation is for empty location and msg
			$this->throw_error("adminpg.php","lwn=007&msg=".$msg);
		}

		public function Return($conn,$query,$msg){
			$m=$msg;
			$result = mysqli_query($conn,$query) or die($this->throw_error("adminpg.php","lwn=011&msg=".$m));
			$row = mysqli_fetch($result);
			return $row;
		}

	}
	$t = new work();
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$sql = "INSERT INTO `teacher`(`name`, `username`, `email`, `password`) VALUES (\"$name\",\"$username\",\"$email\",\"$pass\")";
		if(empty($name) || empty($username) || empty($pass)){
			$t->throw_error("adminpg.php","lwn=014");
		}else{
			$t->nonreturn($conn,$sql,"insertion");
		}
	}elseif($_GET['sel']==0){
		$uname = $_GET['username'];
		$sql="DELETE FROM `teacher` WHERE username = \"$uname\";";
		$t->nonreturn($conn,$sql,"delete");
	}elseif($_GET['sel']==1){
	}