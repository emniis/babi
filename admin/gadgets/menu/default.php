<?php

/* 
 * 
 *          
 */
$cnx = new dbo();// connexion a la BDD
$r=$cnx->query("SELECT * FROM menu_item"); 
$r->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet
$items = $r->fetchAll() ;
?>
<nav class="blog-nav">
    <?php foreach ($items as $item) {?>
        <a class="blog-nav-item" href="<?php echo $item->url; ?>" title=""> <?php echo $item->title; ?></a>
    <?php } ?>
</nav>
   