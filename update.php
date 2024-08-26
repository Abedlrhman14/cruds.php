<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("locatin:login.php");
}





?>



<?php

   $name=$_POST['name'];
   $id=$_POST['id'];
   $connection=mysqli_connect("localhost","root","","cruds");
   $query=mysqli_query( $connection,"UPDATE `category` SET `Category_Name`='$name' WHERE `Category_id`=$id");

   if(mysqli_affected_rows($connection))
   {        
    header("location:index.php");
   }