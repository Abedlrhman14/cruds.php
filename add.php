<?php
// session_start();
// if(!isset($_SESSION['login'])|| $_SESSION['login']['admin']==0)
// {
//     header("locatin:login.php");
// }


// session_destroy();
// header("location:login.php");


?>

<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("location:login.php");
}
if($_SESSION['login']['admin']==0)
    {
        header("location:index.php");
    }


    if(isset($_POST["name"])&&strlen($_POST["name"]>0))
    {
        $name=$_POST["name"];
     
        
       $connection=mysqli_connect("localhost","root","","cruds");
       mysqli_query( $connection,"INSERT INTO `category`(`Category_Name`) VALUES ('$name')");
        if(  mysqli_affected_rows( $connection))
        {
            echo "Category inserted";
            header("location:index.php");
        }
    }






?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

        <title>Document</title>
    </head>
    <body>
        <form action="add.php" method="POST">
            <input type="text" name="name">
            <input type="submit">

        </form>
    </body>
</html>