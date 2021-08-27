<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentCar | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="">
        <div class="error" style="display: none"></div>
        <div class="login-dark">
            <form class="form" action="../function/f_login.php" method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group input-field"><input class="form-control" type="text" id="email" placeholder="Email" name="username"></div>
                <div class="form-group input-field"><input class="form-control" type="password" id="password" placeholder="Password" name="password"></div>
                <div class="form-group"><input class="btn btn-primary btn-block" type="submit" value="Masuk" name="login"></input></div>
                <a href="register.php" class="forgot">Register here!</a>
            </form>
        </div>
    </div>
    
    <!-- <script src="../js/app.js"></script> -->

</body>

</html>