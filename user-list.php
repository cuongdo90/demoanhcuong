<?php
include_once "function.php";
$users = loadData();
// echo "<pre>";
// 
// var_dump($users);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add-user.php">them</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
         <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['age']?></td>
                <td><?php echo $user['address']?></td>
                
            </tr>
            <?php endforeach;?>  

        </tbody>
    </table>
</body>
</html>