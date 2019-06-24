<?php
require_once 'config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$user = mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['psw']);
$psw = hash('sha256', $pass);

$add = "INSERT INTO users(user,password)VALUES('$user', '$psw')";
if(mysqli_query($conn, $add)){
    
    echo 'User succesfully added to database';
}
else{
    echo 'error';
}

        
      
    
