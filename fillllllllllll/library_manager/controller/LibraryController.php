<?php



class LibraryController
{
    private $bookDB;
    private $borrowDB;
    private $categoryDB;

    public function __construct()
    {
        $this->borrowDB = new BorrowDB();
        $this->bookDB = new BookDB();
        $this->categoryDB = new CategoriesDB();
    }

    public function listBooks()
    {
        $borrowList = $this->borrowDB->getList();
        $bookList = $this->bookDB->getList();
        include_once "view/book/list.php";
        include_once "view/borrow/listBorrow.php";
    }

    public function addBook()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categoryList = $this->categoryDB->getList();
            include_once "view/book/addBook.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $book = new Book($_POST['bookName'],$_POST['authorName'], $_POST['categoryCode'], $_POST['publishingName'],
            $_POST['publishingYear'],$_POST['description']
            );
            if ($_FILES['avatar']['type'] == ""){
                $avatar = 'book.jpeg';
            } else {
                $avatar =date('H:m:s').$_FILES['avatar']['name'];
            }
            $book->setBookImage($avatar);
            $this->bookDB->add($book);
            header("location: index.php");
        }

    }
    public function editBook(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $categoryList = $this->categoryDB->getList();
            $bookList = $this->bookDB->getList();
            $book= $this->bookDB->getBookById($_GET['id']);
            include_once "view/book/editBook.php";
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookCode = $_GET['id'];
            $book = new Book($_POST['bookName'],$_POST['authorName'], $_POST['categoryCode'], $_POST['publishingName'],
                $_POST['publishingYear'],$_POST['description']
            );
            $this->bookDB->edit($bookCode, $book);
            header("location: index.php");
        }

    }

    public function removeBook()
    {
        $bookCode = $_GET['id'];
        $this->bookDB->deleteBook($bookCode);
        header("location: index.php");
    }

    public function addBorrow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $bookList = $this->bookDB->getList();
            include_once "view/borrow/addBorrow.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $borrow = new Borrow($_POST['userCode'], $_POST['borrowDate'], $_POST['deadlineDay'], $_POST['bookCode']);

            $this->borrowDB->add($borrow);
            header("location: index.php");
        }
    }

    public function editBorrow(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $bookList = $this->bookDB->getList();
            $borrow= $this->borrowDB->getBorrowById($_GET['id']);
            include_once "view/borrow/editBorrow.php";
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $borrowCode = $_GET['id'];
            $borrow = new Borrow($_POST['userCode'],$_POST['borrowDate'],$_POST['deadlineDay'],$_POST['bookCode']);
            $this->borrowDB->edit($borrowCode, $borrow);
            header("location: index.php");
        }

    }

    public function removeBorrow()
    {
        $borrowCode = $_GET['id'];
        $this->borrowDB->delete($borrowCode);
        header("location: index.php");
    }


}