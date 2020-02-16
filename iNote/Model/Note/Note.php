<?php


class Note
{
    private $noteId;
    private $typedId;
    private $title;
    private $content;

    public function __construct($typedId,$title,$content)
    {
        $this->typedId = $typedId;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @param mixed $noteId
     */
    public function setNoteId($noteId)
    {
        $this->noteId = $noteId;
    }

    /**
     * @param mixed $typedId
     */
    public function setTypedId($typedId)
    {
        $this->typedId = $typedId;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTypedId()
    {
        return $this->typedId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
}