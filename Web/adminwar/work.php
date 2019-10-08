<?php

	class work{

		private function throw_error($location,$msg_code){
			if(empty($location)||empty($msg_code)){
				echo '<script>
					alert("Some thing went wrong");
				</script>';
			}				
			else{
				header("Location: ".$location."?".$msg_code);
			}
		}	

		protected function insert($conn,$query){
			$result = new mysqli_query($conn,$query) or die(throw_error("adminpg.php","lwn=121"));
		}

	}