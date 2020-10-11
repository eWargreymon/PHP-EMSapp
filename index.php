<?php require './conn.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body>

    <!--    Login form    -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
                <div class="card bg-warning" style="margin-top: 50px;">
                    <div class="card-title pt-2 pl-3 cardTitle">Login as Admin</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control input-sm" name="uusername" required placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control input-sm" name="upass" required placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <input type="submit" class="btn btn-success btn-sm" name="ulogin" value="Login as Admin">
                                <a href="register.php" class="btn btn-info btn-sm registerLink">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>

</html>