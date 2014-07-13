<?php

/* 
 * @author Aurelle Meless
 */
require_once '../lib/core/controller.php';

class defaultController extends controller {

    function __construct() {
        
    }
    
    function test() {
        $cnx = new dbo();// connexion a la BDD
        $r=$cnx->query("SELECT * FROM article"); 
        $r->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet
        $articles = $r->fetchAll() ;
        $this->assign("articles", $articles);
        $this->display();
    }

}
