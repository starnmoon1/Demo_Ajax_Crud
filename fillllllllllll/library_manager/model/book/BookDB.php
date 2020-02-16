<?php

class BookDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }
/// HIỂN THỊ
    public function getList()
    {
        $sql = "
            SELECT b.bookCode, b.bookName, b.authorName,ca.categoryCode, ca.categoryName,b.publishingName, b.publishingYear,b.description, b.bookImage
            FROM books b
            
            INNER JOIN categories ca
            ON b.categoryCode = ca.categoryCode
                ";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr =[];
        foreach ($result as $item) {
            $book = $this->createBookFromResult($item);
            array_push($arr, $book);
        }
        return $arr;
    }



    public function createBookFromResult($item)
    {
        $book = new Book(

            $item['bookName'],
            $item['authorName'],
            $item['categoryCode'],
            $item['publishingName'],
            $item['publishingYear'],
            $item['description']
        );
        $book->setCategoryCode($item['categoryCode']);
        $book->setBookCode($item['bookCode']);

        return $book;
    }

///ADD

    public function add($book)
    {

        $sql = "INSERT INTO books(bookName, authorName, categoryCode,publishingName,
 publishingYear, description, bookImage) 
                VALUES (:bookName, :authorName, :categoryCode,:publishingName,
                :publishingYear,:description,:bookImage)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':bookName', $book->getBookName());
        $stmt->bindParam(':authorName', $book->getAuthorName());
        $stmt->bindParam(':categoryCode', $book->getCategoryCode());
        $stmt->bindParam(':publishingName', $book->getPublishingName());
        $stmt->bindParam(':publishingYear', $book->getPublishingYear());
        $stmt->bindParam(':description', $book->getDescription());
        $stmt->bindParam(':bookImage', $book->getBookImage());
        $stmt->execute();

    }

    public function edit($bookCode, $book)
    {

        $sql = "
        UPDATE `books` SET `bookName` = :bookName, `authorName` = :authorName, 
        `categoryCode` = :categoryCode, `publishingName` = :publishingName,
        `publishingYear` = :publishingYear, `description` = :description, 
        `publishingName` = :publishingName
        WHERE `books`.`bookCode` = :bookCode
      ";


        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':bookName', $book->getBookName());
        $stmt->bindParam(':authorName', $book->getAuthorName());
        $stmt->bindParam(':categoryCode', $book->getCategoryCode());
        $stmt->bindParam(':publishingName', $book->getPublishingName());
        $stmt->bindParam(':publishingYear', $book->getPublishingYear());
        $stmt->bindParam(':description', $book->getDescription());
        $stmt->bindParam(':bookImage', $book->getBookImage());
        $stmt->bindParam(':bookCode', $bookCode);
        $stmt->execute();
    }

    //DELETE
    public function deleteBook($bookCode)
    {

        $sql = "DELETE FROM `books` WHERE bookCode = $bookCode";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
    }

    public function getBookById($bookCode)
    {
        $sql = "
            SELECT b.bookCode, b.bookName, b.authorName,ca.categoryCode, ca.categoryName,
            b.publishingName, b.publishingYear,b.description, b.bookImage
            FROM books b
            INNER JOIN categories ca
            ON b.categoryCode = ca.categoryCode
             WHERE bookCode = $bookCode
                ";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $book = new book($result['bookName'],
            $result['authorName'],
            $result['categoryCode'],
            $result['categoryName'],
            $result['publishingYear'],
            $result['description'],
            $result['bookImage']
        );
        $book->setBookCode($result['bookCode']);
        return $book;
    }


}



?>