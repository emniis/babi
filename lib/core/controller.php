<?php
/**
 * Description of controller
 *
 * @author Aurelle Meless
 */
class controller {
    //put your code here
    var $tpl;
    
    function assign($var,$value) {
        $this->$var=$value;
    }
    function display($tpl='default') {
        $path='modules/'.app::getParam('module').'/views/'.$tpl.'.php';
        if($tpl && file_exists($path) ){
            include_once($path);
        }
    }
}
