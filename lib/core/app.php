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
    public static function setParam($key,$value) {
       $_REQUEST[$key]=$value;
    }
    public static function getDefaultTpl() {
       return TEMPLATE;
    }
    public static function loadDefaultModule() {
       if(!self::getParam('module')){
            self::setParam ('module','babi');
            self::setParam ('controller','default');
            self::setParam ('action','test');
        }
    }
    
    public static function main() {
       
        self::loadDefaultModule();
        
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
    
    public static function loadGadget($position=null,$gadget=array()) {
        $cnx = new dbo();// connexion a la BDD
        $r=$cnx->query("SELECT * FROM gadget WHERE position='".$position."'"); 
        $r->setFetchMode(PDO::FETCH_OBJ);
        $items = $r->fetchAll() ;
        
       if(count($items) >0){
           //all position gadgets
            foreach ($items as $item) {
                $path='gadgets/'.$item->type.'/default.php';
                if(file_exists($path)){
                    include $path;
                }
            }
           
       }else {
            //default gadget
            foreach ($gadget as $g) {
                $path='gadgets/'.$g.'/default.php';
                if(file_exists($path)){
                    include $path;
                }
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

