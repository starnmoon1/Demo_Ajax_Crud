<?php


class Products
{
    protected $codeProduct;
    protected $nameProduct;
    protected $typeProduct;


    public function __construct($nameProduct, $typeProduct)
    {
        $this->nameProduct;
        $this->typeProduct;
    }

    /**
     * @return mixed
     */
    public function getCodeProduct()
    {
        return $this->codeProduct;
    }

    /**
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * @return mixed
     */
    public function getTypeProduct()
    {
        return $this->typeProduct;
    }
}