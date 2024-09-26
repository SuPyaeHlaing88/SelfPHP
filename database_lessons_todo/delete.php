<?php
require_once ("db_connection.php");

$id= $_GET['id'];
$sql = "delete from import_export where id=$id";
if (mysqli_query($connection, $sql)) {
    header("location:read.php");
    echo "Delete sucess..";
} else echo "Delete Fail..". mysqli_connect_error();
