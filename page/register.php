<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarRent | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="">
        <div class="error" style="display: none"></div>
        <div class="login-dark">
            <form class="register" method="POST" action="../function/f_add.php">
                <h2 class="sr-only">Register Form</h2>
                <div class="illustration"><i class="icon ion-ios-bookmarks-outline"></i></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input class="form-control" type="email" id="alamat" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="passwordConf">Password Confirm</label>
                    <input class="form-control" type="password" id="password2" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="address">Address</label><br>
                    <textarea name="address" id="address" cols="60" rows="5" placeholder="Fill your address here"></textarea>
                </div>              
                <div class="row">
                    <div class="col-sm-6">
                        <a href="../index.html" class="btn btn-primary btn-block" role="button">Back</a>
                    </div>
                    <div class="col-sm-6">
                        <input class="btn btn-primary btn-block" type="submit" value="Register"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="../js/app.js"></script>

</body>

</html>