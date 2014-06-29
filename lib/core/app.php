<?php
/*
 * @author  : Aurelle Meless
 */
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
       require_once 'templates/'.self::getDefaultTpl().'/index.php';
    }
    
}

