<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />    
</head>
<body>
    <?php
     $connect = new mysqli('localhost','root','','ninjaart');
     if(isset($_GET['username'])){
         $username = $_GET['username'];
         $qry =  "SELECT * FROM teacher WHERE username=\"$username\"";
         $result =$connect->query($qry);
         $data = $result->fetch_assoc();
     }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mx-auto">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Name</strong><br/>
                        <?php echo $_GET['name']; ?>
                    </li>
                    <li class="list-group-item">
                        <strong>email</strong><br/>
                        <?php echo $_GET['email']; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>