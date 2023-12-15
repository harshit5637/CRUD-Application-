<?php
include_once "include/config.php";
$sql_query="SELECT * FROM `user_data` WHERE 1";
$result=mysqli_query($connection,$sql_query);
$sno=1;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

  <div class="text-center mb-3">
    <h2 class="border-bottom text-danger">PHP CRUD APPLICATION </h2>
  </div>
  <div class="row">
    <div class="col-9"></div>
        <div class="col-3 mb-3">
            <a class="btn btn-primary btn-sm" href="create.php">Add New</a>
        </div>
    
  </div>
  <table class="table table-striped table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <th scope="row"><?= $sno ?></th>
      <td><?= $row['name']?></td>
      <td><?= $row['email']?></td>
      <td><?= $row['phone']?></td>
      <td><?= $row['address']?></td>
      <td>
       <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id']?>">Delete</a>
       <a class="btn btn-sm btn-warning" href="edit.php?id=<?= $row['id']?>">Edit</a> 
      </td>
      
    </tr>
   <?php $sno++; } ?> 
  </tbody>
</table>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>