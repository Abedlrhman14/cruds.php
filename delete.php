
<?php

session_start();
if(!isset($_SESSION['login']))
{
    header("locatin: login.php");
}

    $connectios=mysqli_connect("localhost","root","","cruds");

    $query=mysqli_query($connectios,"SELECT * FROM `category`");
    $result=mysqli_fetch_all($query,MYSQLI_ASSOC);



?>

<?php



$id=  $_GET['id'];

$connectios=mysqli_connect("localhost","root","","cruds");
mysqli_query($connectios,"DELETE FROM `category` WHERE `Category_id`= $id");

if(mysqli_affected_rows($connectios))
{
    header("location: index.php");
    
}   

?>