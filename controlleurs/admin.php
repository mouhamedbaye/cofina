<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['views'])) {
        if ($_GET['views']=='liste.question') {
            require(ROUTE_DIR.'views/admin/liste.question.html.php');
        }elseif($_GET['views']=='liste.admin'){
            require(ROUTE_DIR.'views/admin/liste.admin.html.php');
        }elseif($_GET['views']=='creation.admin'){
            require(ROUTE_DIR.'views/admin/creation.admin.html.php');
        }elseif($_GET['views']=='creation.question'){
            require(ROUTE_DIR.'views/admin/creation.question.html.php');
        }elseif($_GET['views']=='liste.joueur'){
            require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
        }elseif($_GET['views']=='tableau.bord'){
            require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
        }elseif($_GET['views']=='edit'){
            $id = $_GET['id'];
            $user = fin_user_by_id($id);
            require(ROUTE_DIR.'views/admin/creation.admin.html.php');
        }elseif($_GET['views']=='delete'){
            $id = $_GET['id'];
            $user = fin_user_by_id($id);
            require(ROUTE_DIR.'views/admin/confirm.html.php');
        }elseif($_GET['views']=='confirme'){
            $id = $_GET['id'];
            if (isset($_GET['id']))
            $user = delete_user($_GET['id']);
            require(ROUTE_DIR.'views/admin/liste.admin.html.php');

     }else{
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    unset($_POST['controlleurs']);
    unset($_POST['action']);
    unset($_POST['btn_submit']);
    inscrire_admin($_POST);
    }

function inscrire_admin(array $data):void{
    $arrayError = array();
    extract($data);
    validation_login($login, 'login', $arrayError);
    validation_password($password, 'password', $arrayError);
    validation_champ($prenom, 'prenom', $arrayError);
    validation_champ($nom, 'nom', $arrayError);
    
    if ($password != $confpassword){
        $arrayError['confpassword'] = 'les deux password ne sont pas identique';
            }
            if(count($arrayError)==0){
               
                $user = find_login_password($login, $password);
               /* else {
                    $data['role'] = 'ROLE_JOUEUR';
                } */
                
            }else{
                $_SESSION['arrayError'] = $arrayError;
                header('location:'.WEB_ROUTE. '?controlleurs=admin&views=creation.admin');
            }
            if ($password != $confpassword){
                $arrayError['confpassword'] = 'les deux password ne sont pas identique';
                    }
               
                    if(form_valid($arrayError)){
                        if(est_admin()){
                            $data['role'] = 'ROLE_ADMIN';
                        }
                        add_user($data);
                        header('location:'.WEB_ROUTE. '?controlleurs=admin&views=liste.admin');
                        
                        /* 
                        $data['role']=est_admin()?'ROLE_ADMIN': 'ROLE_JOUEUR'; */
                        /* if (upload_image($files)){
                        $data['avatar'] = $files['avatar']['name'];
                       
                    }else{
                        $arrayError['avatar']="Erreur de telechargement";
                        $_SESSION['arrayError'] = $arrayError;
                        header('location:'.WEB_ROUTE. '?controlleurs=admin&views=creation.admin');
                        
                    } */

                    }



    if(count($arrayError)==0){
        //appel  du model
        $user = find_login_password($login, $password);
        if (count($user)==0){
            $arrayError['erreurConnexion'] = "Login ou Password Incorrecte";
            $_SESSION['arrayError'] = $arrayError;
            header('location:'.WEB_ROUTE. '?controlleurs=admin&views=creation.admin');
    }else {
        $_SESSION['userConnect']=$user;
        if($user['role'] == 'ROLE_ADMIN'){
            header('location:'.WEB_ROUTE. '?controlleurs=admin&views=liste.question');
        }elseif($user['role'] == 'ROLE_JOUEUR'){
            header('location:'.WEB_ROUTE. '?controlleurs=joueur&views=jeu');
        }
    }

}else {
    $_SESSION['arrayError'] = $arrayError;
            header('location:'.WEB_ROUTE. '?controlleurs=admin&views=creation.admin');
}
}
?>
