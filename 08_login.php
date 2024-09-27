<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    
     <!-- Font Awesome -->
     <!-- <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"> -->
    <!-- Google Fonts -->
    <!-- <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"> -->
    <!-- MDB -->
    <!-- <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
    rel="stylesheet"> -->

</head>
<body style="background-color: lightgreen;">
    <div class="container">
        <div class="row  mt-4">
            <div class="col-4">
                <div class="text-center">
                    <a href="08_login.php">
                        <button class="btn bg-dark text-white mb-3" style="width: 200px">Login</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="10_register.php">
                        <button class="btn bg-danger text-white mb-3" style="width: 200px">Register</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="09_logout.php">
                        <button class="btn bg-secondary text-white mb-3" style="width: 200px">Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="subbmit" class="btn btn-dark float-end" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    if (isset($_POST['login'])) {
        $email= $_POST['email'];
        $password = $_POST['password'];

        if($email = $_SESSION['email'] && password_verify($password, $_SESSION['password']))
            echo "<b style='background-color: yellow;'>Login Success!!</b>";
        else echo "<b style='background-color: red;'>Try Again!!</b>";
    }
    ?>
</body>
</html>