<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark align-center">
<div class="container">
<div class="row">
<div class="col-md-6 p-3 bg-light mx-auto mt-0">

<?php
    if(isset($_GET['wrong'])){
           echo '<p style="color : red;">Phone ,Email or Rollnumber execest!!</p>';
        }
    function style($name,$placeholder){
        if(isset($_GET['wrong'])){
            $d = "<input style = \"border:1px solid red;\" type=\"text\" name=\"".$name."\" placeholder=\"".$placeholder."\" class=\"form-control\" />";
        }else{
            $d = "<input type=\"text\" name=\"".$name."\" placeholder=\"".$placeholder."\" class=\"form-control\" />";
        }
        return $d;
    }
?>
<form method="POST" action="includes/insert.test.php" >

<label for="name">Roll Number</label>
<?php
    $s = style("rnumber","--BT------");
    echo $s;
?>
<label for="name">First Name</label>
<input type="text" name="fname" placeholder="First Name" class="form-control" />
<label for="name">Last Name</label>
<input type="text" name="lname" placeholder="Last Name" class="form-control" />
<label for="">Password</label>
<input type="password" name="password" placeholder="Password" class="form-control" />
<label for="">Email</label>
<?php
    $s = style("email","demo@gmail.com");
    echo $s;
?>
<label for="phone">Phone Number</label>
<?php
    $s = style("phone","10 digit Number");
    echo $s;
?>
<hr/>

<select name="sem" class="col-sm-12 Semester form-control form-control-lg">
    <option value="option">Semester</option>
    <option value="1">1th</option>
    <option value="2">2th</option>
    <option value="3">3th</option>
    <option value="4">4th</option>
    <option value="5">5th</option>
    <option value="6">6th</option>
    <option value="7">7th</option>
    <option value="8">8th</option>
</select> 
<hr/> 
<select name="branch" class="col-sm-12 Branch form-control form-control-lg"> 
    <option value="1"> Select Branch</option> 
    <option value="CSE">CSE</option>
    <option value="CSE">ECE</option>
    <option value="EE">EE</option>
</select> 
<hr/> 
<input type="submit" name="signup" value="Signup" class="btn btn-success mt-3">
</form>

</div> </div> </div>

</body>
</html>
