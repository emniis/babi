<?php
/*
 * @author  : Aurelle Meless
 */
class app {

    function __construct() {
        
    }
    public static function getModule() {
       $module=$_REQUEST['module'];
       return $module;
    }
    public static function getController() {
       $controller=$_REQUEST['controller'];
       return $controller;
    }
    public static function getAction() {
       $action=$_REQUEST['action'];
       return $action;
    }
    public static function main() {
       $mod=self::getModule();
       $action=  self::getAction();
       $path='modules/'.$mod.'/controllers/default.php';
       $bclass='defaultController';
       require_once($path);
       $controller=new $bclass();
       $controller->$action();
       
    }
    
    public static function init() {
       require_once 'templates/'.config::$params['template'].'/index.php';
    }
    
}

