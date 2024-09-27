<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
</head>

<body>
<?php
    $errorName=    $errorEmail=    $errorPhone=    $errorAddress= "";

     if(isset($_POST['btnSave'])) {
        if($_POST['name']== null || empty($_POST['name']))  $errorName= "Fiil Name:";
        else $name = $_POST['name'];
        
        if($_POST['email']== null || empty($_POST['email']))  $errorEmail="Fiil Email:";
        else $email = $_POST['email'];

        if($_POST['phone']== null || empty($_POST['phone']))  $errorPhone="Fiil Phone:";
        else $phone = $_POST['name'];

        if($_POST['address']== null || empty($_POST['address']))  $errorAddress= "Fiil Address:";
        else $name = $_POST['address'];

     }
 ?>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 shadow bg-primary">
                <form method="post">
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Name">
                        <small class="text-danger"><?php echo $errorName; ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter Email">
                        <small class="text-danger"><?php echo $errorEmail; ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input class="form-control" type="text" name="phone" placeholder="Enter Phone">
                        <small class="text-danger"><?php echo $errorPhone; ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                        <small class="text-danger"><?php echo $errorAddress; ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <input class="bg-success" type="submit" name="btnSave" value="Save">
                    </div>
                </form>
                
            </div>
        </div>
    </div>

  
</body>

</html>