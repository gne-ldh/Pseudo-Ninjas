<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="../mainframe/style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="bg-dark">
    
<?php
    $connect = new mysqli('localhost','root','','ninjaart');
    if(isset($_GET['lwn'])){
        echo '<script> 
            alert("deleted");
        </script>';
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
                        <?php
   
    ?><br>
    <style>
        input{
            color:white;
        }
    </style>
    <h3 class=" text-center font-weight-bold text-light">Teacher Information Updates</h3><br>
    <form action="insert.php" method="POST">
    <label class="text-light"for="name">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="bg-dark"type="text" name="name" placeholder="name"/></label><br>
    <label class="text-light" for="name">UserName :
        <input class="bg-dark" type="text" name="username" placeholder="username"/></label><br>
        <label class="text-light" for="name">Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="bg-dark"type="email" name="email" placeholder="email"/></label><br>
        <label class="text-light" for="name">Password :&nbsp;&nbsp;
        <input class="bg-dark"type="password" name="password" placeholder="password"/></label><br>
        <input type="submit" onClick="runthis()"/> 
    </form><br>

    <table class='table'>
    <thead>
    <th class="bg-light">name</th>
    <th class="bg-light">username</th>
    <th class="bg-light">email</th>
    <th class="bg-light">password</th>
    <th class="bg-light">Action</th>
    </thead>
<tbody>

<?php
    $qry="select * from teacher";
    $result= $connect->query($qry);
    $i = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td class=\"bg-light\">$row[name]</td>";
        echo "<td class=\"bg-light \">$row[username]</td>";
        echo "<td class=\"bg-light\">$row[password]</td>";
        echo "<td class=\"bg-light\">$row[email]</td>";
        echo "<td class=\"bg-light\"><a href='delete.php?username=".$row['username']."' class='btn btn-danger'>Delete</a>
        <a href='edit.php?name=".$row['username']."' class='btn btn-warning'>Edit</a>
        <a href='view.php?name=".$row['username']."&email=".$row['email']."' class='btn btn-success'>View</a></td>";
        echo "</tr>";
    }
    ?>
</tbody>
    </table>
    
</body>
</html>