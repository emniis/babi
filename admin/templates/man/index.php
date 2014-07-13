<?php
/* 
 * page de style par defaut du template$this->addJSLink('kendo/js/kendo.web.min.js');
$this->addJSLink('kendo/js/cultures/kendo.culture.fr-FR.min.js');
$this->addCSSLink('css/dist/css/bootstrap.min.css');
        $this->addCSSLink('kendo/styles/kendo.common-bootstrap.min.css');
        $this->addCSSLink('kendo/styles/kendo.bootstrap.min.css');
 */


$root= URL.'/'.ADMIN_PATH.'/templates/man/';


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>AKWABA! | Babi</title>
        <link href="<?php /*echo $root.'css/bootstrap.min.css';*/ ?>"  rel="stylesheet" type="text/css" media="all"/>
        <link href="../lib/kendoui/styles/kendo.common.min.css"  rel="stylesheet" type="text/css" media="all"/>
        <link href="../lib/kendoui/styles/kendo.default.min.css"  rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo $root.'css/man.css'; ?>" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="<?php echo $root.'js/jquery.min.js'; ?>"></script>
        <script type="text/javascript" src="../lib/kendoui/src/js/kendo.ui.core.js"></script>
        <script type="text/javascript" src="../lib/kendoui/src/js/cultures/kendo.culture.fr-FR.js"></script>
        
    </head>
    <body>
        <div id="header_pane" class="k-content" style="height:43px;">
            <div id="form_connexion"></div>
            <div id="pane">
                
                <ul id="menu"> 
                    <li> nom prenom
                       <ul>
                           <li><a href="#">D&eacute;connexion</a></li>
                       </ul>
                    </li>
                    <li><a href="#" title="Parametres">
                            <img src="images/icon/menu/dashboard.png" width="32" height="32" 
                                 alt="Parametres"/></a>
                    </li>
                    <li><a href="#" title="Tableau de bord">
                            <img src="images/icon/menu/dashboard.png" width="32" height="32" 
                                 alt="Dashbord"/></a>
                    </li>
                    <li><a href="#" title="Modules">
                            <img src="images/icon/menu/home.png" width="32" height="32" 
                                 alt="Modules"/></a>
                    </li>
                    
                    <li><a href="#" title="Gadgets">
                            <img src="images/icon/menu/home.png" width="32" height="32" 
                                 alt="Gadgets"/></a>
                    </li>
                    
                    <li><a href="#" title="Templates">
                            <img src="images/icon/menu/home.png" width="32" height="32" 
                                 alt="Templates"/></a>
                    </li>
               </ul>

                
                
            </div>
        </div>
        <div id="corpus_pane" style="height:300px;">
                <div id="left-pane">
                    <div id="sidebar" class="pane-content">
                        sidebar1
                    </div>
                </div>
                <div id="workspace_wrapper">
                    <div id="workspace" style="height: 100%;">
                           workspace
                    </div>
                </div>

        </div>
        <script>
        $(document).ready(function() {
            $("#menu").kendoMenu();
             var tooltip = $("#menu").kendoTooltip({
                                filter: "a",
                                width: 120,
                                position: "top"
                            }).data("kendoTooltip");

           kendo.culture("fr-FR");
            $("#corpus_pane").kendoSplitter({
                panes: [
                    { collapsible: true, size: "16%" },
                    { collapsible: false }
                ]
            });

            $("#sidebar_menu").kendoPanelBar({expandMode:"single"}); 
            //new                 

        });
        </script>
    </body>
</html>
