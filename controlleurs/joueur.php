<?php 
 if (!est_joueur()) header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['views'])) {
        if ($_GET['views']=='joueur') {
            require(ROUTE_DIR.'views/joueur/joueur.html.php');
           }
     }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }


?>