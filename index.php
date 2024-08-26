


<?php

session_start();
if(!isset($_SESSION['login']))
{
    header("location:login.php");
}

    $connectios=mysqli_connect("localhost","root","","cruds");

    $query=mysqli_query($connectios,"SELECT * FROM `category`");
    $result=mysqli_fetch_all($query,MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
    <?php if($_SESSION['login']['admin']): ?>

        <a href="add.php">Insert</a>
        <?php endif; ?>

        <a href="logout.php">Logout</a>
        <table >
            <tr>
                <th>name</th>
                <th>id</th>
                <?php if($_SESSION['login']['admin']): ?>

                <th>Delete</th>
                <th>Edit</th>
                <?php endif; ?>

            </tr>
            
                <?php foreach($result as $value ): ?>
                    <tr>
                        <td> <?= $value['Category_Name'] ?></td>
                        <td> <?= $value['Category_id'] ?></td>
                        <?php if($_SESSION['login']['admin']): ?>
                        <td><a href="delete.php?id=<?= $value['Category_id'] ?>">Delete</a></td>
                        <td><a href="edit.php?id=<?= $value['Category_id'] ?>">Edit</a></td>

                            <?php endif; ?>

                    </tr>

                    <?php endforeach; ?>
            
        </table>
    </body>
</html>