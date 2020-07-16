<?php

//Connects to database server and executes SQL statements
class Database {
    public static $servername = "localhost";
    public static $dbName = "ScandiwebProducts";
    public static $username = "root";
    public static $password = "";

    //Connects to database
    private static function con() {
        $pdo = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    private $sku, $name, $price, $type;
    private $size, $weight, $height, $width, $length;
    private $del;

    // Getts product data and stores it in database
    public function addProduct() {
        // adds product general information to database
        $stmt = self::con()->prepare("INSERT INTO products (SKU, Name, Price, Type) VALUES (:sku, :name, :price, :type)");
        $stmt->bindParam(':sku', $this->sku);  
        $stmt->bindParam(':name', $this->name);  
        $stmt->bindParam(':price', $this->price);  
        $stmt->bindParam(':type', $this->type);  
        $stmt->execute();

        // adds product details (special attribute) to database
        $stmt = self::con()->prepare("INSERT INTO spec_attribute (Product, Size, Weight, Height, Width, Length) VALUES (:product, :size, :weight, :height, :width, :length)");
        $stmt->bindParam(':product', $this->sku);  
        $stmt->bindParam(':size', $this->size);  
        $stmt->bindParam(':weight', $this->weight);  
        $stmt->bindParam(':height', $this->height);  
        $stmt->bindParam(':width', $this->width);  
        $stmt->bindParam(':length', $this->length);  
        $stmt->execute();

        $conn = null;
    }

    //Setts product sku, name, price, type information
    public function setProductInfo($sku, $name, $price, $type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    //Setts product detail (spec attribute) information
    public function setProductDetails($size, $weight, $height, $width, $length) {
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    //Selects all products information from database and returns it as array
    public function selectAll() {
        $list = self::con()->query("SELECT P.SKU, P.Name, P.Price, P.Type, S.Size, S.Weight, S.Height, S.Width, S.Length FROM products P, spec_attribute S WHERE P.SKU=S.Product");
        return $list;
        $conn = null;
    }

    // Getts array of products to delete and deletes them from database
    public function delProducts() {
        foreach($this->del as $val)
        {
            $stmt1 = self::con()->prepare("DELETE FROM spec_attribute WHERE Product=:$val");
            $stmt2 = self::con()->prepare("DELETE FROM products WHERE SKU=:$val");
            $stmt1->bindParam(":$val", $val);  
            $stmt2->bindParam(":$val", $val);  
            $stmt1->execute();
            $stmt2->execute();
        }
        $conn = null;
    }
    //Setts array of products to delete
    public function setDelProducts($del) {
        $this->del = $del;
    }



}