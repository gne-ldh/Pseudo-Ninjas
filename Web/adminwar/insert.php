<?php
$connect =  mysqli_connect('localhost','root','','ninjaart');
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `teacher`(`name`, `username`, `email`, `password`) VALUES (\"$name\",\"$username\",\"$email\",\"$password\"); ";
        mysqli_query($connect,$sql)or die("this is not working");
        header("Location: adminpg.php?");
    }
    ?>