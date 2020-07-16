<?php

class Controller {

    //Autoloads views
    public static function CreateView($viewName) {
        require_once("./Views/$viewName.php");
    }
}
?>