<?php
require_once 'config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(isset($_POST['email']) || isset($_POST['psw']) || isset($_POST['Login'])){
    
    $user = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['psw']);
    $psw = hash('sha256', $pass);
}


$query = "SELECT user FROM users WHERE user = '$user' AND password = '$psw'";
$data = mysqli_query($conn, $query);

if(mysqli_num_rows($data)==1){
    
    $row = mysqli_fetch_array($data);
    
    $user = $row['user'];
    
    echo  $user . ' succesfully connected to database';
}

 else {
    echo 'User or Password did not match';    
}

mysqli_fetch_array($data);

var_dump($data);
