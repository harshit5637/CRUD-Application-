<?php
//echo "<pre>";
//print_r($_GET);
//inserting data into database by using get method 
include "include/config.php";
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
   $sql_query="INSERT INTO `user_data`(`id`, `name`, `email`, `phone`, `address`) VALUES
    ('NULL','$name','$email','$phone','$address')";
    $result= mysqli_query($connection, $sql_query);
    if ($result){
        echo"Data Successfully Inserted int the Database";
        echo"<script> location.replace('index.php')</script>";
    }else{
        echo $connection->error;
    }
    }

// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $phone=$_POST['phone'];
//     $address=$_POST['address'];
//    $sql_query="INSERT INTO `user_data`(`id`, `name`, `email`, `phone`, `address`) VALUES
//     ('NULL','$name','$email','$phone','$address')";
//     $result= mysqli_query($connection, $sql_query);
//     if ($result){
//         echo"Data Successfully Inserted int the Database";
//     }else{
//         echo $connection->error;
//     }
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Php Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="text-center">
    <h2>PHP GET Method Form</h2>
    </div>
<div class="container p-5">
<form method="GET" action="" class ="container card ">
 <div class="row">
    <div class="col sm-4">
    <label class="label" for="">Name</label>
    <input  class ="form-control" type="text" placeholder="Enter Your Name" name="name">
    </div>
    <div class="col sm-4">
    <label class="label" for="">Email</label>
    <input  class ="form-control" type="email" placeholder="Enter your valid Email" name="email">
    </div>
    <div class="col sm-4">
    <label class="label" for="">Phone</label>
    <input  class ="form-control" type="number" placeholder="Enter your 10 digit valid Phone Number" name="phone">
    </div>
    <div class="col sm-4">
    <label class="label" for="">Address</label>
    <input class ="form-control" type="text" placeholder="Enter your Address" name="address">
    </div>
    </div>
    <div class="mt-4 text-center">
    <button name="submit" class="btn btn-success">Submit</button>
    </div>
</form>  
</div>
</body>
</html>

