<?php
include_once "../../class/User.php";
include_once "../../class/UserManager.php";
include_once "../../database/UserDB.php";
include_once "../../database/DBConnect.php";
$id = $_GET['id'];

$userManager = new UserManager();
$userManager->delete($id);
header("Location:../../index.php");

