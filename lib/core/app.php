<?php
/*
 * @author  : Aurelle Meless
 */
class app {

    function __construct() {
        
    }
    
    public static function init() {
       require_once 'templates/'.config::$template.'/index.php';
    }

}

