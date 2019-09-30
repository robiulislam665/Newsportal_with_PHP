<?php

/**
 * Description of Routes
 * all Routing types and their methods defined
 * @author MD. SHAHED
 */
class Route {

    public static $validRoutes = array();

    public static function post($route, $function) {
        self::$validRoutes[] = $route;
        $function->__invoke();
    }

    public static function get($route, $function) {
        self::$validRoutes[] = $route;
        $function->__invoke();
    }
    
    public static function set($route, $function) {
        self::$validRoutes[] = $route;
        $function->__invoke();
    }


}
