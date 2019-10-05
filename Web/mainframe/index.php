<?php 
    include "sessions.php";
?>

<script type="text/javascript">

    function clicked() {     
        sessionStorage.removeItem("id");
        sessionStorage.removeItem("I_remember");
        window.location.href = "../?wrong=112";

    }

</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 70%;
  width: 0;
  position: absolute;
  z-index: 3;
  top: 200px;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.8s;
}

.sidenav a:hover {
  color: blue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body class="bg-dark">
<div class="container-fluid">
                        <div class="row">
                                <div id="header">   
                                    <div class="title1">     
                                        <div class="col-md-12 float-right mx-auto  p-0 mt-0 bg-warning" >
                                        <img class="  float-left mt-0 ml-4" src="logo.png" alt=""/>  
                       <!-- <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon">Teacher Signin</span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                                <a href="" class="nav-link">Home</a>
                            </li>
                        <li class="nav-item Teacher">
                                <a href="" class="nav-link ">Teacher</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                    NAV END -->            
                                <h4 class="mr-5 float-right font-weight-bold"><br>Atal Bihari Vajpayee Govt Institute of 
                                                    Engineering & Technology</h4><br><br><br>
                                        
                                <h6 class="mr-5 p-1 float-right">Pragatinagar, Shimla (H.P) - 171202</h6> 
                            
                        </div>
                </div>
                                </div>
                        </div><br><br><br>
                        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<span class="text-light" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "240px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
                        <div class="row">
    <div class="col-md-6 p-4 bg-light mx-auto mt-0">
<table class="table">
<thead class="thead-light">
    <tr>
    <th scope="col">subject Name</th>
    <th scope="col">Teacher name</th>
    <th scope="col">notes</th>
    <th scope="col">credits</th>
    </tr>
</thead>
<tbody>    
    <?php
       echo '<tr>
            <td>'.$fname.' '.$lname.'</td>
            <td>'.$teacher_name.'</td>
            <td><a href="'.$link_for_notes.'">click here</a></td>
            <td>'.$creadet.'</td>
            </tr>';
    ?>    
        </tbody>
</table> 
</div>
</div><br><br><br>
<hr width="85%" class="border border-danger" /> 
            <div class="row"><br/><br/>
        <div class="footer col-md-12 font-weight-bold  text-right bg-light text-secondary">
            <br><br/><br/>Designed and Developed by Moksh,Nishant,Riya,Sakshi
                 <br><br>
        </div>
                </div>
                </div>                                      
</body>

</html>

    
<input type="button" name="logout" onclick="clicked()" value="logout">