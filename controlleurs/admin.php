<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['views'])) {
        if ($_GET['views']=='liste.question') {
            require(ROUTE_DIR.'views/admin/liste.question.php');
           }
     }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }


?>