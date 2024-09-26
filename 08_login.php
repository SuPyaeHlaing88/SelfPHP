<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body style="background-color: lightgreen;">
    <div class="container">
        <div class="row  mt-4">
            <div class="col-3">
                <div class="text-center">
                    <a href="login.php">
                        <button class="btn bg-dark text-white mb-3" style="width: 200px">Login</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="register.php">
                        <button class="btn bg-danger text-white mb-3" style="width: 200px">Register</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="logout.php">
                        <button class="btn bg-secondary text-white mb-3" style="width: 200px">Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                        <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmedpassword" class="form-control">
                            </div>
                            <button type="subbmit" class="btn btn-dark float-end" name="register">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['register'])) {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $confirmedpassword =$_POST['confirmedpassword'];

        if (strlen($password) >= 6 && strlen($confirmedpassword) >= 6) {
            if( $password == $confirmedpassword){

            }
            else {
                echo "Type Again !";
            }
        }
        else {
            echo "{assword Must be Greater than 6! ";
        }
    }
    ?>
</body>
</html>