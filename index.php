<?php

$servername = "localhost";
$username = "root";
$password = "";

// Creates connection
$conn = new mysqli($servername, $username, $password);
// Checks connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Creates database and tables
$newDb = "CREATE DATABASE ScandiwebProducts ";
$newProductsTable = "CREATE TABLE ScandiwebProducts . products ( SKU BIGINT(13) UNSIGNED NOT NULL , Name VARCHAR(250) NOT NULL , Price DECIMAL(10,2) NOT NULL , Type VARCHAR(10) NOT NULL, PRIMARY KEY (SKU)) ENGINE = InnoDB";
$newSpecAttributeTable = "CREATE TABLE ScandiwebProducts . spec_attribute (Product BIGINT(13) UNSIGNED NOT NULL, Size SMALLINT UNSIGNED NULL , Weight DECIMAL(2,1) UNSIGNED ZEROFILL NULL , Height SMALLINT(4) UNSIGNED NULL , Width SMALLINT(4) UNSIGNED NULL , Length SMALLINT(4) UNSIGNED NULL, PRIMARY KEY (Product), FOREIGN KEY (Product) REFERENCES products(SKU)) ENGINE = InnoDB";

$conn->query($newDb);
$conn->query($newProductsTable);
$conn->query($newSpecAttributeTable);
$conn->close();

require_once('Routes.php');                     //Autoloads Routes.php

function __autoload($class_name){               //Autoloads classes and controllers 

    if(file_exists('./classes/'.$class_name.'.php')){
        require_once './classes/'.$class_name.'.php';         
    } else if(file_exists('./Controllers/'.$class_name.'.php')){
        require_once './Controllers/'.$class_name.'.php';         
    }

}
?>