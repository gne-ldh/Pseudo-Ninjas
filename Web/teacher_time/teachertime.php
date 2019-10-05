<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
 <link rel="stylesheet" href="../mainframe/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark">
    <?php
        if(isset($_GET["wk"])){
        if($_GET['wk']=='s'){
        echo '<script type="text/javascript">alart("Success full-upload");</script>';
        }else{
        echo '<script type="text/javascript">alart("Upload Fails");</script>';
    }
    }
    ?>
<div class="container-fluid">
                        <div class="row">
                                <div id="header">   
                                    <div class="title1">     
                                        <div class="col-md-12 float-right mx-auto  p-0 mt-0 bg-warning" >
                                        <img class="  float-left mt-0 ml-4" src="logo.png" alt=""/>  
                                                                                  
                                <h4 class="mr-5 float-right font-weight-bold"><br>Atal Bihari Vajpayee Govt Institute of 
                                                    Engineering & Technology</h4><br><br><br>
                                        
                                <h6 class="mr-5 p-1 float-right">Pragatinagar, Shimla (H.P) - 171202</h6> 
                            
                        </div>
                </div>
                                </div>
                                <style>
                    #emp{
                        position:absolute;
                        right:0px;
                        top:67px;
                    }
                                </style>
                                <div id="emp" class="float-left p-4 mt-5">
                                    <button class="btn btn-danger" >Logout</button>
                                </div>
                             <br><br><br><br><br><br><br><br><br>
                             
<style>
    #temp{
        background:white;
        padding:10%;
        height:50%;
        width:60%;
        font-size:25px;
        margin-left:11%;
        margin-right:7%;
        border-radius:20px;
        
    }
</style>
 <div class="p-5" id="temp">
    <?php
        for($i = 0 ; $i<5 ; $i++) {
            echo '<div class="float-right  " style="padding:20px; text-align:center; margin-right:10px;
             background:green; padding:26px; border-radius:25px; margin:10px; float:right;" >temp-data</div>';
        }
    ?>
    </div>
</div>
    <div>
        <form action="upload_file.php" method="POST"  enctype="multipart/form-data">
            <input type = "file" name = "fileToUpload"><br/>
            <input type="submit" name="submit" value="submit">
        </form>
    <div>
    <br><br><br><br><br><br><br><br><br>
<hr width="85%" class="border border-danger" /> 
 <div  class="row"><br/><br/>

        <div class="col-lg-12 font-weight-bold mb-0 text-right bg-light text-secondary"
         style="position:absolute; width:100%;"><br><br/><br/>
         Designed and Developed by Moksh,Nishant,Riya,Sakshi<br><br>
        </div>
    </div>
        </div>
    </div>

</body>
</html>