<?php
require_once 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['submit'])){
$user = mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['psw']);
$psw = hash('sha256', $pass);
}
$query = "SELECT email FROM users WHERE email = '$user' AND password ='$psw'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    
    $email = $row['email'];
    
    echo 'User ' . $email . ' is now logged in';
}
else {
    echo 'Wrong username/password combination'; 

    }