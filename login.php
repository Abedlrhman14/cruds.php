<?php
session_start();


if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $connectios=mysqli_connect("localhost","root","","cruds");

    $query=mysqli_query($connectios,"SELECT * FROM `users` WHERE `email`='$email' AND `PASSWORD`='$password'");
    $result=mysqli_fetch_assoc($query);

    if(!empty($result))
    {
        $_SESSION['login'] =$result;
        header("location:index.php");

    }else   
    {
        echo "try agin"; 
    }

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">
            <input type="submit" value="login">

        </form>
    </body>
</html>