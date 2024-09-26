<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo create</title>
</head>

<body>
    <h1>todo list</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="workname" id="name" placeholder="Enter your name:" required>
            <label for="email">Email</label>
            <input type="email" name="workemail" id="email" placeholder="Enter your email:" required>
            <label for="password">Password</label>
            <input type="text" name="workpassword" id="password" placeholder="Enter Password:" required>
            <button name="addBtn">Add</button>
        </div>
    </form>

    <?php
    require_once("db_connection.php");

    if (isset($_POST['addBtn'])) {

        $workName = $_POST['workname'];
        $workEmail = $_POST['workemail'];
        $workPassword = $_POST['workpassword'];

        $sql = "INSERT INTO import_export(name, email, password) VALUES ('$workName', ' $workEmail', '$workPassword')";

        if (mysqli_query($connection, $sql)) {
            echo "Insert sucess..";
        } else echo "Query Fail..";
    }
    ?>
    <a href="read.php">List Page</a>
</body>

</html>