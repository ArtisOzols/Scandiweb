<?php

Route::set("index.php", function() {
    require_once("./Views/Index.php");
});


Route::set("list", function() {
    Products::AllProducts();
    Controller::CreateView("list");
});
Route::set("delete", function() {
    Products::DeleteProducts();
    header('Location: ./list');
});

Route::set("new", function() {
    Controller::CreateView("new");
});
Route::set("add", function() {
    Products::AddProduct();
    Controller::CreateView("list");
});

?>