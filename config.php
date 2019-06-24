<?php
define('DB_NAME', 'phptest');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function User(){

    if(isset($_POST['uname']) && isset($_POST['psw'])){
    
   

        $user = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $pass = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
 
        
        $add = "INSERT INTO users(email,password)VALUES('$user','$pass')";
        
       
       echo 'User succesfuly added to database';
    }
      else {       
        echo 'error';
}  
     
  
}
 