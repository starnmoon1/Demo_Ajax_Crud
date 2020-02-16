<?php


class ProductDB
{
    private $connect;
    public function __construct($_connect)
    {
        $this->connect = $_connect;
    }
    public function createProduct($product)
    {
        $sql = "INSERT INTO products(nameProduct, typeProduct) VALUE (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product->getNameProduct());
        $stmt->bindParam(2, $product->getTypeProduct());
        $stmt->execute();

    }
    public function getList()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['codeProduct'], $item['nameProduct'], $item['typeProduct']);
            array_push($arr, $product);
        }
        return $arr;
    }
    public function edit($codeProduct, $newName, $newType)
    {
        $sql = "UPDATE products SET nameProduct =  ?, typeProduct = ?,  WHERE id = $codeProduct ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $newName);
        $stmt->bindParam(2, $newType);
        $stmt->execute();
    }
    public function delete($codeProduct)
    {
        $sql = "DELETE FROM products WHERE id=codeProduct";
        $this->connect->query($sql);
    }
    public function getListMenu($codeProduct)
    {
        $sql = "SELECT p.nameProduct, p.typeProduct
                FROM products p
                WHERE s.id = $codeProduct
                ";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['nameProduct'],$item['typeProduct']);
            array_push($arr, $product);
        }
        return $arr;
    }
}