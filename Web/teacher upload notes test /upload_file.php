<?php
	if(isset($_POST["submit"])){
		$file = $_FILES["fileToUpload"];
		print_r($_FILES["fileToUpload"]);
		$filename = $file["name"];
		$filesize = $file["size"];
		$fileerror = $file["error"];
		if(!$fileerror===0){
			echo $fileerror;
		}else{
			if(!($filesize > 8192000)){
				echo $filesize;
			}else{
				echo "submit";
				move_uploaded_file($file["tmp_name"], "uploads/".$filename);
			}
		}
	}
?>