<?php
    $connect = new mysqli('localhost','root','','ninjaart');
$username= $_GET['username'];
$qry = "DELETE FROM teacher WHERE username= \"$username\"";
if($connect->query($qry)){
    header('Location: adminpg.php?lwn=112');
}else{
    echo "error" .$connect->error;
}
header('Location: adminpg.php?lwn=112');
?>