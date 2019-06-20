<?php
require_once 'config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$user = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

$pass = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
$psw = password_hash($pass, PASSWORD_DEFAULT);

echo $user;
echo $pass;

$add ="INSERT INTO users(email,password)VALUES('$user','$psw')";
mysqli_query($conn, $add);


 

        
      
    
