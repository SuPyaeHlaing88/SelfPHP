<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
   
    <?php 
      $connection =  mysqli_connect('localhost', 'root','','codelab_db');

        if($connection) echo"Database connection success!";
        else echo "Databse connection Fail!"
    ?>
</body>
</html>