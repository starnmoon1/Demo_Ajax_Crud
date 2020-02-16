<?php


class BookList
{
    protected $bookCode;
    protected $bookName;
    protected $authorName;
    protected $categoryName;
    protected $publishingName;
    protected $publishingYear;
    protected $bookImage;

    public function __construct($bookName,$authorName,$categoryName,$publishingName,$publishingYear, $bookImage)
    {
        $this->bookName = $bookName;
        $this->authorName = $authorName;
        $this->categoryName = $categoryName;
        $this->publishingName = $publishingName;
        $this->publishingYear = $publishingYear;
        $this->bookImage = $bookImage;
    }



    /**
     * @return mixed
     */
    public function getPublishingYear()
    {
        return $this->publishingYear;
    }

    /**
     * @return mixed
     */
    public function getBookImage()
    {
        return $this->bookImage;
    }

    /**
     * @return mixed
     */
    public function getPublishingName()
    {
        return $this->publishingName;
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
    public function getAuthorName()
    {
        return $this->authorName;
    }


    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @return mixed
     */
    public function getBookCode()
    {
        return $this->bookCode;
    }

    /**
     * @param mixed $bookCode
     */
    public function setBookCode($bookCode)
    {
        $this->bookCode = $bookCode;
    }



}