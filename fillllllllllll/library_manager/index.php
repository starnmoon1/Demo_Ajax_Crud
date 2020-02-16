<?php

include_once "controller/LibraryController.php";
include_once "model/book/BookDB.php";
include_once "model/book/Book.php";
include_once "model/borrow/BorrowList.php";
include_once "model/borrow/BorrowDB.php";
include_once "model/borrow/Borrow.php";
include_once "model/database/DBConnect.php";

include_once "model/categories/Categories.php";
include_once "model/categories/CategoriesDB.php";

$libraryController = new LibraryController();

?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php include_once "view/core/navbar.php" ?>


<div class="container">
    <?php
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case "addBorrow":
            $libraryController->addBorrow();
            break;
        case "addBook":
            $libraryController->addBook();
            break;
        case "editBook":
            $libraryController->editBook();
            break;
        case "deleteBook":
            $libraryController->removeBook();
            break;
        case "deleteBorrow":
            $libraryController->removeBorrow();
            break;

        case "editBorrow":
            $libraryController->editBorrow();
            break;
        default:

                $libraryController->listBooks();

            break;
    }

    ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>