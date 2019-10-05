<?php
	if(isset($_POST["submit"])){
		$file = $_FILES["fileToUpload"];
		print_r($_FILES["fileToUpload"]);
		$filename = $file["tmp_name"];
		$file_type = $file["type"];
		$tmp = explode(".",$file['name']);
		$file_ext = strtolower(end($tmp));
		$name="/opt/lampp/htdocs/s/teacher_time/uploads/".$file["name"];
		echo "file temp name : ".$filename;
		if(move_uploaded_file($filename, $name)){
			echo "succes";
			header("Location: ../teacher_time/teachertime.php?wl=s");
		}else{
			echo "fails";
			header("Location: ../teacher_time/teachertime.php?wl=f");
		}
}