<?php
    $connect = new mysqli('localhost','root','','ninjaart');
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        $qry = "SELECT * FROM users WHERE id= $id";
        $result =$connect->query($qry);
        $data = $result->fetch_assoc();
       if(isset($_POST['name'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        
        $qry1 = "UPDATE users SET username='$username',email='$email' WHERE id = '$id' ";
        if($connect->query($qry1)){
            echo "success";
            header('location: adminpg.php');
        }else{
            echo "error".$connect->error;
        }
        }
        ?>
        <form action="" method="post">
        <input type="text" name="username" placeholder="username" value="<?php echo $data['username'] ?>"/>
        <input type="email" name="email" placeholder="email" value="<?php echo $data['email'] ?>"/>
        <input type="submit"/>
        </form>
<?php
    }else{
        echo "you are not permitted";
    }
    ?>