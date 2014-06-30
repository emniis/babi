<?php
/*
 * @author  : Aurelle Meless
 */
require_once 'config.php';// configuration
require_once 'lib/core/dbo.php';//base de donnees

class app {

    function __construct() {
        
    }
    public static function getParam($key) {
        $param=null;
        if(isset($_REQUEST[$key]) && !empty($_REQUEST[$key])){
            $param=$_REQUEST[$key];
        }
       
       return $param;
    }
    public static function getDefaultTpl() {
       return TEMPLATE;
    }
    public static function main() {
       $module=self::getParam('module');
       $controller=  self::getParam('controller');
       $action=  self::getParam('action');
       if(($module) && ($controller) && ($action)){
           $path='modules/'.$module.'/controllers/'.$controller.'.php';
           if(file_exists($path)){
               $bclass=$controller.'Controller';
                require_once($path);
                $controller=new $bclass();
                $controller->$action();
           } 
       }
    }
    
    public static function init() {
       self::loadCore();
       require_once 'templates/'.self::getDefaultTpl().'/index.php';
    }
    public static function loadCore() {
        require_once 'lib/core/controller.php';//application
    }
}

