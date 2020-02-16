<?php


class AuthorDB
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn();
    }

    public function getList()
    {
        $sql = "
            SELECT a.authorCode, a.authorName, a.website, a.note
            FROM authors a
            INNER JOIN  books b
            ON a.authorCode = b.authorCode
            ORDER BY a.authorName DESC
                ";
        $stmt = $this->conn->query($sql);
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
}