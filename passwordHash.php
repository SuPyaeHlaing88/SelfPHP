<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hash</title>
</head>
<body>
    <h3>Login Form</h3>
    <form action="" method="post">
        Email <input type="email" name="userEmail"><br>
        Password <input type="password" name="userPassword"><br>
        <input type="submit" value="Login" name="loginbtn">
    </form>

    <?php 
        $email = 'admin@gmail.com';
        $password = 'admin123';

        if (isset($_POST['loginbtn']) ){
            $useremail = $_POST['userEmail'];
            $userpassword = $_POST['userPassword'];

            echo $useremail."<br>". $userpassword;

        }
    ?>
</body>
</html>