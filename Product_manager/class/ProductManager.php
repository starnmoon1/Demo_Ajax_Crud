<?php
include_once "../database/ProductDB.php";
include_once "../database/connectDB.php";

class ProductManager
{
    private $productDB;
    public function __construct()
    {
        $db = new connectDB();
        $this->productDB = new ProductDB($db->connect());
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $stores = $this->getProduct();
            include_once "view/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $product = new Product(null, $_POST['nameProduct'], $_POST['typeProduct']);
            $this->productDB->createProduct($product);
            header("location: index.php");
        }
    }

    public function getList()
    {
        $products = $this->productDB->getList();
        include_once "view/product/list.php";
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "view/product/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $productID = $_GET['codeProduct'];
            $this->productDB->edit($productID, $_POST['nameProduct'], $_POST['typeProduct']);
            header("location: index.php");
        }
    }
    public function delete()
    {
        $productID = (int)$_GET['id'];
        $this->productDB->delete($productID);
        header("location: index.php");
    }
}