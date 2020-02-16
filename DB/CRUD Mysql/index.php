<?php
include_once "class/User.php";
include_once "class/UserManager.php";
include_once "database/UserDB.php";
include_once "database/DBConnect.php";

$userManager = new UserManager();
$users = $userManager->getList();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        td {
            !important;
        }
    </style>
</head>
<body>

<?php
include_once "process/view/navbar.php";
?>

<div style="margin: auto; width: 1000px">
<form method="post">
    <a href="process/user/add.php">
        <button type="button" class="btn btn-secondary ">Add</button>
    </a>
<table  style="margin: auto" class="table col-12">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Avatar</th>
        <th scope="col">Edit & Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) :?>
    <tr>
        <th scope="row"><?php echo $user->getID() ?></th>
        <td><?php echo $user->getName() ?></td>
        <td><?php echo $user->getAge() ?></td>
        <td><?php echo $user->getAddress() ?></td>
        <td><img style="height: 200px;" src="images/<?php echo $user->getAvatar() ?>"></td>

        <td>

            <a href="process/user/edit.php?id=<?php echo $user->getID();?>">
                <button type="button" class="btn btn-success">Edit</button>  </a>
            <a href="process/user/delete.php?id=<?php echo $user->getID();?>">
                <button type="button" class="btn btn-danger" onclick="confirm('Ban that su muon xoa')">Delete</button>  </a>
        </td>

    </tr>
    <?php endforeach ?>

    </tbody>
</table>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
