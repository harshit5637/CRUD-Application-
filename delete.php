<?php
include "include/config.php";
$id = $_GET['id'];

$sql_query = "DELETE FROM `user_data` WHERE id = $id";
$result = mysqli_query($connection, $sql_query);

if ($result) {
    echo "<script> location.replace('index.php')</script>";
} else {
    echo $connection->error;
}
?>
