<?php

class BorrowDB
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
            SELECT b.borrowCode, u.userName, bo.bookName, b.borrowDate,b.deadlineDay
            FROM borrow b
            INNER JOIN user u
            ON b.userCode = u.userCode
            INNER JOIN books bo
            ON b.bookCode = bo.bookCode
            ORDER BY u.userName DESC
                ";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $borrowList = $this->createBorrowFromResult($item);
            array_push($arr, $borrowList);
        }
        return $arr;
    }


    public function createBorrowFromResult($item)
    {
        $borrowList = new BorrowList($item['userName'],
            $item['bookName'],
            $item['borrowDate'],
            $item['deadlineDay']
        );
        $borrowList->setBorrowCode($item['borrowCode']);
        return $borrowList;
    }

    //ADD

    public function add($borrow)
    {
        $sql = "INSERT INTO borrow(userCode, borrowDate, deadlineDay,bookCode) 
                VALUE (:userCode, :borrowDate, :deadlineDay,:bookCode)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userCode', $borrow->getUserCode());
        $stmt->bindParam(':borrowDate', $borrow->getBorrowDate());
        $stmt->bindParam(':deadlineDay', $borrow->getDeadlineDay());
        $stmt->bindParam(':bookCode', $borrow->getBookCode());
        $stmt->execute();
    }

    //EDIT
    public function getBorrowById($borrow_id)
    {
        $sql = "
            SELECT b.borrowCode, u.userName, bo.bookName, b.borrowDate,b.deadlineDay
            FROM borrow b
            INNER JOIN user u
            ON b.userCode = u.userCode
            INNER JOIN books bo
            ON b.bookCode = bo.bookCode
             WHERE borrowCode = $borrow_id
                ";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $borrowList = new BorrowList($item['userName'],
            $item['bookName'],
            $item['borrowDate'],
            $item['deadlineDay']
        );
        $borrowList->setBorrowCode($item['borrowCode']);
        return $borrowList;
    }


    public function edit($borrow_id, $note)
    {
        $sql = "UPDATE borrow 
                SET userCode = :userCode, borrowDate = :borrowDate, 
                deadlineDay = :deadlineDay, bookCode = :bookCode, 
                WHERE borrow.borrowCode = :$borrow_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userCode', $borrow->getUserCode());
        $stmt->bindParam(':borrowDate', $borrow->getBorrowDate());
        $stmt->bindParam(':deadlineDay', $borrow->getDeadlineDay());
        $stmt->bindParam(':bookCode', $borrow->getBookCode());
        $stmt->execute();
    }
}


?>






