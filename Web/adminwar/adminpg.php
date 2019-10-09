<?php 
    include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="../mainframe/style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>

</head>
<body class="bg-dark">

    <script type="text/javascript">
            function out(){
               sessionStorage.removeItem("id");
               window.location.href = "index.php";
            }
            if(window.location.search == "?lwn=011&msg=insertion"){
                alert("failed insertion");
            }
        </script>
    
<?php
    if(isset($_GET['lwn'])){
        if($_GET['lwn']==011){
            echo '<script> alert("failed '.$_GET['msg'].'"); </script>';
        }elseif ($_GET['lwn']==007) {
            echo '<script> alert("Successfull '.$_GET['msg'].'"); </script>';
        }
    }
?>
<div class="container-fluid">
                        <div class="row">
                                <div id="header">   
                                    <div class="title1">     
                                        <div class="col-md-12 text-center  mx-auto  p-3  bg-warning" >
                        <h1 class=" text-center font-weight-bold">A D M I N </h1>
                    
                        </div>
                </div>
                                </div>
                        </div>
    <br>
    <style>
        #name{
            border-radius: 30px;
            padding: 10px;
        }
        #uname{
            border-radius: 30px;
            padding: 10px;
        }
        #email{
            border-radius: 30px;
            padding: 10px;
        }
        #pass{
            border-radius: 30px;
            padding: 10px;
        }
        #button_sub{
            border-radius: 30px;
            font-size: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            padding-right: 10px;
            padding-left: 10px;
            background: #343a40;
            border-color: #343a40;
            box-shadow: none;
            text-shadow: none;
        }
        input{
            color:white;
        }
    </style>
    <h3 class=" text-center font-weight-bold text-light">Teacher Information Updates</h3><br>
    <form action="work.php" method="POST">
        <div id="msg"></div>
        <label class="text-light"for="name">Name :
        <input class="bg-dark" id="name" type="text" name="name" placeholder="name"/></label>
        <label class="text-light" for="name">UserName :
        <input class="bg-dark" id="uname" type="text" name="username" placeholder="username"/>
        </label>
        <label class="text-light" for="name">Email :
        <input class="bg-dark" id="email" type="email" name="email" placeholder="email"/></label><label class="text-light" for="name">Password :
        <input class="bg-dark" id="pass" type="password" name="password" placeholder="password"/></label><br>
        <input  id="button_sub" type="submit" name="submit" value="submit" /> 
    </form>

    <br>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#input_text").load("insert.php");
        });
    </script>
    
    <table class='table'>
    <thead>
    <th class="bg-light">name</th>
    <th class="bg-light">username</th>
    <th class="bg-light">email</th>
    <th class="bg-light">password</th>
    <th class="bg-light">Action</th>
    </thead>
<tbody id="input_text">

</tbody>
    </table>
    <input class="bg-dark" style="border-radius: 18px; padding: 6px; position: absolute; right: 4px; top: 4px;" type="submit" value="logout" onclick="out()">
<script type="text/javascript">
    
    if (window.location.search=="?*"){
        window.location.search = "";
    }

</script>
</body>
</html>