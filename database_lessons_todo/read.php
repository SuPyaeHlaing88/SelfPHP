<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read list</title>
    <link rel="stylesheet" href="/css/all.min.css">
</head>
<body>
    <a href="create.php">Create New</a>
    <h1>Table of Lists</h1>
    <table border="1">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Action</th>
        </thead>
        <tbody>
            
            <?php
            require_once ("db_connection.php");
            $sql = "SELECT * FROM import_export";
            $query = mysqli_query($connection, $sql);
            $totalRow = mysqli_num_rows($query);
           
            while ($row = mysqli_fetch_assoc($query)){
                $time = date('jS \of F g:i:a', strtotime($row['created_at']));
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    <td>$time</td>
                    <td>{$row['updated_at']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Update</a>
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</body>
</html>