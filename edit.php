<?php
// session_start();
// if(!isset($_SESSION['login']))
// {
//     header("locatin: login.php");
// }





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


     $id= $_GET  ['id'];
    
    $connection=mysqli_connect("localhost","root","","cruds");
    $query=mysqli_query( $connection,"SELECT * FROM  `category` WHERE `Category_id`='$id'");
    $result= mysqli_fetch_assoc($query);








  


 




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
        <form action="update.php" method="POST">
            <input type="text" value="<?= $result['Category_Name']?>" name="name">
            <input type="submit">
            <input type="hidden" name="id" value="<?= $result['Category_id']?>">
        </form>
    </body>
</html>
