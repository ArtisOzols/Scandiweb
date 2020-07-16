<?php

// invokes passed ($function)  functions if URL matches passed value ($route)
class Route{
    public static $validRoutes = array();
    
    public static function set($route, $function) {
        self::$validRoutes[] = $route;

        if($_GET['url'] == $route) {
            $function->__invoke();
        }
    }
}