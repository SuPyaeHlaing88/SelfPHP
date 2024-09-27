<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

<body style="background: lightgreen;">
    <div class="container">
        <div class="row  mt-4">
            <div class="col-3">
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
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmedpassword" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-dark float-end" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();
    function checkStrongPassword($password)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if (preg_match('/[A-Z]/', $password)) $upperStatus = true;
        if (preg_match('/[a-z]/', $password)) $lowerStatus = true;
        if (preg_match('/[0-9]/', $password)) $numberStatus = true;
        if (preg_match('/[!@#$%^&*]/', $password)) $specialStatus = true;

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) return true;
        else return false;
    }

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedpassword = $_POST['confirmedpassword'];

        // if ($name != "" && $email != "" && $password != "" && $confirmedpassword != "") {

        if (strlen($password) >= 6 && strlen($confirmedpassword) >= 6) {
            if ($password === $confirmedpassword) {
                $status = checkStrongPassword($password);
                // var_dump($status);
                if ($status) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                    echo "Rigister Success!";
                } else {
                    echo "Your Password is weak!!<br>Should be contain A-Z a_z 0-9 !@#$%^&*";
                }
            } else {
                echo "Type Again !";
            }
        } else {
            echo "Password Must be Greater than 6! ";
        }
        //     } else {
        //         echo "Need to fail!";
        //     }
    }
    ?>

</body
    </html>