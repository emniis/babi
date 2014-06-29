<?php
/*
 */

foreach ($this->articles as $article) {
            echo '<p>';
            echo 'ID : '.$article->id.'<br />';
            echo 'Title : '.$article->title.'<br />';
            echo 'Content : '.$article->content.'<br />';
            echo '<p/>';
}

?>

