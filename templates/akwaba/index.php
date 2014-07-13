<?php
/* 
 * page de style par defaut du template
 */
$root= URL.'/templates/akwaba/';

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>AKWABA! | Babi</title>
        <link href="<?php echo $root.'css/bootstrap.min.css'; ?>"  rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo $root.'css/akwaba.css'; ?>"  rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="<?php echo $root.'js/jquery.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo $root.'js/bootstrap.min.js'; ?>"></script>
    </head>
    <body>
        <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
<!--            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>-->
            <?php app::loadGadget('bloc-menu',array('menu')); ?>
          </nav>
        </div>
      </div>

      <div class="container">

        <div class="blog-header">
          <h1 class="blog-title">The Akwaba blog</h1>
          <p class="lead blog-description">The official example template of creating a blog with Babi.</p>
        </div>

        <div class="row">

          <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <?php app::main(); ?>
            </div><!-- /.blog-post -->

          </div><!-- /.blog-main -->

          <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <?php app::loadGadget('bloc1',array('date')); ?>
            </div>
            <div class="sidebar-module">
              <h4>Archives</h4>
              <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
              </ol>
            </div>
            <div class="sidebar-module">
              <h4>Elsewhere</h4>
              <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
              </ol>
            </div>
          </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

      </div><!-- /.container -->

      <div class="blog-footer">
        <p>designed with <a href="http://getbootstrap.com">Bootstrap</a> by <a href="#">Ivoire Maker</a>.</p>
        <p><a href="#">Back to top</a></p>
      </div>
    </body>
</html>
