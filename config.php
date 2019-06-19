<?php
define('DB_NAME', 'proiectPhp');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function User(){
    
    if(isset($_POST['uname']) && isset($_POST['psw'])){

        $user = filter_var($_POST['uname'],FILTER_SANITIZE_STRING);
        $pass = password_hash($_POST['psw'], PASSWORD_DEFAULT);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        
        echo $user . "<br>";
        echo $pass . "<br>";
        
    }
      else {       
        echo 'error';
}  
    
}
 