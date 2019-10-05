

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Faculty Report Generator</title>
</head>
<body class="grey lighten-4">
    <main class="pl-0 main-login">
        <section>
    <div class="container row">
        <div class="col m6 offset-m3 l6 offset-l3 xl4 offset-xl4 s10 offset-s1 card card-login z-depth-4">
            <div class="card-title card-title-login gradient-bg lighten-2 white-text">
                <h5 class="center flow-text">Login</h5>
            </div>
            <div class="card-content">
                <form action="login.php" method="POST">
                    <div class="input-field">
                        <i class="material-icons prefix">mail</i>
                        <input type="email" name="email" id="email" class="validate" value="">
                        <label for="email">Email</label>
                        <span class=""></span>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" id="password">
                        <label for="password">Password</label>
                        <span class=""></span>
                    </div>
                    </p>
                    
                    <br>
                    <div class="card-action">
                        <button class="btn col s12 m12 l12 xl12 waves-effect waves-light gradient-bg" type="submit" name="submit">Login</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</section>
    </main>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/app.js"></script>
</body>
</html>