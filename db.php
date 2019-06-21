<?php
require_once 'config.php';

$user = mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['psw']);

$psw = hash('sha256', $pass);

$add = "INSERT INTO users(email,password)VALUES('$user', '$psw')";

if(mysqli_query($conn, $add)){
    
    echo 'User succesfully added to database';
}
else{
    echo 'error';
}
      
