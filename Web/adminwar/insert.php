<script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
<script type="text/javascript">
    function a(){
        alert("Failed to insert information in database");
        $.get("adminpage.php",{lwn:"114"});
    }
</script>
<?php
$connect =  mysqli_connect('localhost','root','','ninjaart');
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($name)||empty($username)||empty($email)||empty($password)) header("Location: adminpage.php?lwn=110");
        $sql = "INSERT INTO `teacher`(`name`, `username`, `email`, `password`) VALUES (\"$name\",\"$username\",\"$email\",\"$password\"); ";
        mysqli_query($connect,$sql)or die("<script> a(); </script>");
        header("Location: adminpage.php?");
    }
    ?>