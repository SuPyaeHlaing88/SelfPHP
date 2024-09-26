<!-- Get data> show > edit > update -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <?php
    require("db_connection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM import_export WHERE id=$id";
    $query = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($query);

    if (isset($_POST['updateBtn'])) {
        require("db_connection.php");
        // $workId = $_POST['workid'];
        $id = $_GET['id'];
        $workName = $_POST['workname'];
        $workEmail = $_POST['workemail'];
        $workPassword = $_POST['workpassword'];

        if (($workName == "" || $workName == null) || ($workEmail == "" || $workEmail == null) || ($workPassword == "" || $workPassword == null)) {
            echo "<b style='color:red';> Data are required</b>";
        } else {
            $sql1 = "UPDATE import_export SET name='$workName', email='$workEmail', password ='$workPassword' WHERE id='$id'";
            $query1 = mysqli_query($connection, $sql1);
            if ($query1) {
                header("location:read.php");
            } else echo "Query Fail..";
        }
    }
    ?>

    <form method="post">
        <div class="form-group">
            <!-- <input type="hidden" name="workid" value="<?php echo $data['id']; ?>"> -->
            <label for="name">Name</label>
            <input class="form-group-item" type="text" name="workname" id="name" value="<?php echo $data['name']; ?>">
            <label for="email">Email</label>
            <input class="form-group-item" type="email" name="workemail" id="email" value="<?php echo $data['email']; ?>">
            <label for="password">Password</label>
            <input class="form-group-item" type="text" name="workpassword" id="password" value="<?php echo $data['password']; ?>">
            <button name="updateBtn">Update</button>
        </div>
    </form>

</body>

</html>