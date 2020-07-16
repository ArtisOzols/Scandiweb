<?php

class Products extends Database {

    //Adds product in database
    public function AddProduct()        
    {                
        // Gets posted values
        $type = $_POST["type"];
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $width = $_POST["width"];
        $length = $_POST["length"];

        // Adds product data in database
        $obj= new Database();
        $obj->setProductInfo($sku, $name, $price, $type);
        $obj->setProductDetails($size, $weight, $height, $width, $length);
        $obj->addProduct();
    }

    
    //Retrieves all product information form database
    public function AllProducts() {
        $obj= new Database();
        $list = $obj->selectAll();
        return $list;
    }

    //Deletes selected products
    public function DeleteProducts() {
        $obj= new Database();
        $obj->setDelProducts($_POST);
        $obj->delProducts();
    }
}
?>