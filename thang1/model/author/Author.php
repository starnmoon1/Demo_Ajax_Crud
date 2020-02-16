<?php


class Author
{
    private $authorCode;
    private $authorName;
    private $website;
    private $note;

    public function __construct($authorName, $website, $note)
    {
        $this->authorName = $authorName;
        $this->website = $website;
        $this->note = $note;
    }

    /**
     * @param mixed $authorCode
     */
    public function setAuthorCode($authorCode)
    {
        $this->authorCode = $authorCode;
    }

    /**
     * @param mixed $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

}