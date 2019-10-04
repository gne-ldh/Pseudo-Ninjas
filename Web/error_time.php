<?php 
    /*session_start();
    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: ?");
    }
    echo $_SESSION["name"];
    echo "<br>";
    echo $_SESSION["ps"];*/
    /* send error msg using GET method for display */ 
    if(isset($_GET["wrong"])){
        echo $_GET["wrong"];
    }
?>

<form action="index.php">
    <input type="submit" name="logout" value="go to login!">
</form>