<?php


class Book
{
    private $bookCode;
    private $bookName;
    private $authorCode;
    private $categoryCode;
    private $publishingCode;
    private $publishingYear;
    private $description;

    public function __construct($bookName,$author,$category, $publishingName, $publishingYear, $description){
        $this->bookName = $bookName;
        $this->authorCode = $author;
        $this->categoryCode = $category;
        $this->publishingCode = $publishingName;
        $this->publishingYear = $publishingYear;
        $this->description = $description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $authorCode
     */
    public function setAuthorCode($authorCode)
    {
        $this->authorCode = $authorCode;
    }

    /**
     * @param mixed $bookCode
     */
    public function setBookCode($bookCode)
    {
        $this->bookCode = $bookCode;
    }

    /**
     * @param mixed $bookName
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;
    }

    /**
     * @param mixed $categoryCode
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
    }

    /**
     * @param mixed $publishingCode
     */
    public function setPublishingCode($publishingCode)
    {
        $this->publishingCode = $publishingCode;
    }

    /**
     * @param mixed $publishingYear
     */
    public function setPublishingYear($publishingYear)
    {
        $this->publishingYear = $publishingYear;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getAuthorCode()
    {
        return $this->authorCode;
    }

    /**
     * @return mixed
     */
    public function getBookCode()
    {
        return $this->bookCode;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * @return mixed
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @return mixed
     */
    public function getPublishingCode()
    {
        return $this->publishingCode;
    }

    /**
     * @return mixed
     */
    public function getPublishingYear()
    {
        return $this->publishingYear;
    }

}





