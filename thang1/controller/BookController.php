<?php


class BookController
{
    private $BookDB;
    private $AuthorDB;

    public function __construct()
    {
        $db = new DBConnect();
        $this->BookDB = new BookDB($db->connect());
//        $this->AuthorDB = new AuthorDB($db->connect());
    }

    public function getBookList()
    {
        $listBook = $this->BookDB->getList();
        include_once "../view/book/listBook.php";
    }

    public function getAuthorList()
    {
        return $this->AuthorDB->getList();
    }

    public function  addBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $bookList = $this->bookDB->getList();
            include_once "view/book/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $book = new Book($_POST['bookName'], $_POST['authorCode'], $_POST['categoryCode'],
                $_POST['publishingCode'], $_POST['publishingYear'], $_POST['description'],
                $_POST['bookImage']);

            $this->BookDB->add($book);
            header("location: index.php");
        }
    }
}