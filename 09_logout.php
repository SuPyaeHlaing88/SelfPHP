<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
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
        <div class="row mt-4">
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
                <div style="background: red; color:yellow; height:100px; text-align: center">Logout Sucesses!</div>
            </div>
        </div>
    </div>
    <?php 
    session_start();
    session_destroy();
    ?>
</body>
</html>