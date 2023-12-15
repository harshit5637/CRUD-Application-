<?php

//echo "Hello Harshit Mishra how are you";
$connection=mysqli_connect("localhost","root","","crud");

if($connection)
{
    echo "Connection OK";
}
else
{
    echo"Connection Failed";
}
?>