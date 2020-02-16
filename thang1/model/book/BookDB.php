<?php

class BookDB
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
/// HIỂN THỊ
    public function getList()
    {
        $sql = "
             SELECT b.bookCode, b.bookName, a.authorName, ca.categoryName,p.publishingName, b.publishingYear, b.bookImage
            FROM books b
            INNER JOIN authors a
            ON b.authorCode = a.authorCode
            INNER JOIN categories ca
            ON b.categoryCode = ca.categoryCode
            INNER JOIN publishing p
            ON b.publishingCode = p.publishingCode;
                ";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr =[];
        foreach ($result as $item) {
            $bookList = $this->createBookFromResult($item);
            array_push($arr, $bookList);
        }
        return $arr;
    }

    public function createBookFromResult($item)
    {
        $bookList = new BookList(

            $item['bookName'],
            $item['authorName'],
            $item['categoryName'],
            $item['publishingName'],
            $item['publishingYear'],
            $item['bookImage']
        );
        $bookList->setBookCode($item['bookCode']);
        return $bookList;
    }

    public function getListAuthor()
    {
        $sql1 = "
            SELECT a.authorCode, a.authorName, a.website, a.note
            FROM authors a
            INNER JOIN  books b
            ON a.authorCode = b.authorCode
            ORDER BY a.authorName DESC
                ";
        $stmt = $this->conn->query($sql1);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $authorList = $this->createAuthorFromResult($item);
            array_push($arr, $authorList);
        }
        return $arr;
    }


    public function createAuthorFromResult($item)
    {
        $authorList = new AuthorList($item['authorName'],
                                    $item['website'],
                                    $item['note']);
        $authorList->setAuthorCode($item['authorCode']);
        return $authorList;
    }

//    public function getAuthorById($author_id)
//    {
//        $sql = "
//            SELECT a.authorCode, a.authorName
//            FROM authors a
//            INNER JOIN books b
//            ON a.authorCode = b.authorCode
//             WHERE authorCode = $author_id
//                ";
//        $stmt = $this->conn->query($sql);
//        $stmt->execute();
//        $result = $stmt->fetchAll();
//        $authorList = new AuthorList($item['authorCode'],
//            $item['authorName']);
//        $borrowList->setAuthorCode($item['authorCode']);
//        return $borrowList;
//    }

    public function add($book)
    {
        $sql = "INSERT INTO books(bookName, authorCode, categoryCode, publishingCode, publishingYear, bookImage) 
                VALUE (:bookName, :authorCode, :categoryCode,:publishingCode, :publishingYear, bookImage)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':bookName', $book->getBookName());
        $stmt->bindParam(':authorCode', $book->getAuthorCode());
        $stmt->bindParam(':categoryCode', $book->getCategoryCode());
        $stmt->bindParam(':publishingCode', $book->getPublishingCode());
        $stmt->bindParam(':publishingYear', $book->getPublishingYear());
        $stmt->bindParam(':bookImage', $book->getBookImage());
        $stmt->execute();
    }

    //    public function returnBookList($result)
//    {
//        $arr =[];
//        foreach ($result as $item) {
//            $bookList = $this->createBookFromResult($item);
//            array_push($arr, $bookList);
//        }
//        return $arr;
//    }

}

///ADD

?>