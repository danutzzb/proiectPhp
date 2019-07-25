<?php
    require_once 'config.php';
    session_start();
    if ($_SESSION['access'] != 'yes')
    {
     header("Location:login.php");
    }
   
   
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // daca utilizatorul incearca sa acceseze aceasta pagina, verifica daca s-a inregistrat prin login.php
   
    if(isset($_POST['titlu']) && isset($_POST['body']) && isset($_POST['submit'])){
    
    $titlu = mysqli_real_escape_string($conn,$_POST['titlu']);
    $body = mysqli_real_escape_string($conn,$_POST['body']);


    }


$query = "insert into contacte.postari(post_title, post_body) values ('$titlu', '$body') ";
$data = mysqli_query($conn, $query);


var_dump($conn);
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="log.php" method="post">
                
                <input type="text" name="titlu" placeholder="Titlu">
                <textarea name="body" cols="60" rows="20"></textarea>
                <button type="submit" name="submit">Submit</button>
                
                
                
            </form>

