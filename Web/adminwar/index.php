<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="../mainframe/style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--gead-->

</head>
<body class="bg-dark">
	<?php 
		session_start();
		if(isset($_SESSION["id"])){
				header("Location: adminpg.php?e=".$_SESSION['id']);
		}
	?>
<div class="container-fluid">
<div class="row">
<div id="header"> 
<div class="title1"> 
<div class="col-md-12 text-center mx-auto p-3 bg-warning" >
<h1 class=" text-center font-weight-bold">A D M I N </h1>

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4 p-3 bg-light mx-auto mt-5">
<h1 class="text-center">Login</h1>
<hr/>
<form action = "fetch.php" method="POST">
<label for="">User-name</label>
<input type="text" name="uname" class="form-control" />
<label for="">Password</label>
<input  type="password" name="lpassword" class="form-control" />
<?php
	if(isset($_GET['wrong'])){
        if($_GET['wrong']=="empty"){
        	echo '<p style="color : red;">Column are empty!! </p>';
        }elseif($_GET['wrong']=="not"){
        	echo '<p style="color : red;">*The Roll Number or Password is incorrect. </p>';
    }
    }else{
        echo '<br>';
    }
?>
<input type="submit" name="submit" value="Login" class="float-left btn btn-success mt-3" />
</form>
</div>
</div>

</body>
</html>