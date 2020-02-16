<?php


class NoteDB
{
    private $conn;
    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getListNote()
    {
        $sql = "SELECT note.id, note.title, note.content, note_type.name
                FROM note INNER JOIN note_type
                ON note.type_id = note.id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $this->returnNoteList($result);

    }

    public function createNoteFromResult($item)
    {
        $note = new Note($item['title'],
                         $item['content'],
                         $item['name']);
        $note->setNoteId($item['id']);
        return $note;
    }

    public function returnNoteList($result)
    {
        $arr = [];
        foreach ($result as $item)
        {
            $note = $this->createNoteFromResult($item);
            array_push($arr, $note);
        }
        return $arr;
    }

    public function searchNotes($keyword)
    {
        $sql = "SELECT note.id, note.title, note.content, note_type.name  FROM note
                INNER JOIN note_type 
                ON note.type_id = note_type.id 
                WHERE note.title LIKE :keyword";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $this->returnNoteList($result);
    }

    public function add($note)
    {
        $sql = "INSERT INTO note(title, content, type_id) 
                VALUE (:title, :content, :type_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $note->getTitle());
        $stmt->bindParam(':content', $note->getContent());
        $stmt->bindParam(':type_id', $note->getTypeId());
        $stmt->execute();
    }

    public function delete($note_id)
    {
        $sql = "DELETE FROM note WHERE id = $note_id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
    }

    public function edit($note_id, $note)
    {
        $sql = "UPDATE note 
                SET title = :title, content = :content, type_id = :type_id
                WHERE id = :note_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $note->getTitle());
        $stmt->bindParam(':content', $note->getContent());
        $stmt->bindParam(':type_id', $note->getTypeId());
        $stmt->bindParam(':note_id', $note_id);
        $stmt->execute();
    }

    public function getNoteById($note_id)
    {
        $sql = "SELECT id, title, content, type_id  
                FROM note
                WHERE id = $note_id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $note = new Note($result['title'],
            $result['content'],
            $result['type_id']);
        $note->setId($result['id']);
        return $note;
    }

    public function getNoteByType($type_id)
    {
        $sql = "SELECT note.id, note.title, note.content, note_type.name  FROM note
                INNER JOIN note_type 
                ON note.type_id = note_type.id 
                WHERE note_type.id = $type_id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $this->returnNoteList($result);
    }
}
?>