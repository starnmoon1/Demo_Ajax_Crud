<?php
include_once "../../class/User.php";
include_once "../../class/UserManager.php";
include_once "../../database/UserDB.php";
include_once "../../database/DBConnect.php";

$id = (int)$_GET['id'];
$userManager = new UserManager();
$user = $userManager->getId($id);

if ($_SERVER['REQUEST_METHOD'] == "POST" ){
    include_once "uploadImage.php";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    if ($_FILES['avatar']['type'] == ""){
        $avatar = $user->getAvatar();
    } else {
        unlink("../../images/" . $user->getAvatar());
        $avatar =date('H:m:s').$_FILES['avatar']['name'];
    }

    $userManager->edit($id,$name,$age,$address,$avatar);
    header("Location:../../index.php");
}


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
</head>
<body>
<?php
include_once "../view/navbar.php";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" name="name" value="<?php echo $user->getName(); ?>">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Age</label>
        <input type="number" name="age" value="<?php echo $user->getAge(); ?>">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input type="text" name="address" value="<?php echo $user->getAddress(); ?>">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Avatar</label>
        <img src="../../images/<?php echo $user->getAvatar(); ?>">
        <input type="file" name="avatar">
    </div>

    <button type="submit" onclick="confirm('Bac co chac muon sua doi?')">Submit</button>


</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


