<?php
$connect = new mysqli('localhost','root','','ninjaart');
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = "INSERT INTO `teacher`(`name`, `username`, `email`, `password`) VALUES (\"$name\",\"$username\",\"$email\",\"$password\") ";
        $connect->query($qry)or die();
    }
    header("Location: adminpg.php?");
    ?>