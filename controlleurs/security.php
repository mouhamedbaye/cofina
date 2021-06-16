<?php

if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['views'])){
        if($_GET['views']=='connexion'){
            require_once (ROUTE_DIR. 'views/security/connexion.html.php');
        }elseif ($_GET['views']=='inscription'){
            require_once (ROUTE_DIR. 'views/security/inscription.html.php');
        }elseif($_GET['views']=='deconnexion'){
            deconnexion();
            require(ROUTE_DIR. 'views/security/connexion.html.php');
        }
    }else {
        require_once (ROUTE_DIR. 'views/security/connexion.html.php');
        }
}elseif($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['action'])){
        if($_POST['action']=='connexion'){  
            connexion($_POST['login'],$_POST['password']);
        }elseif ($_POST['action']== 'inscription') {
            unset($_POST['controlleurs']);
            unset($_POST['action']);
            unset($_POST['btn_submit']);
            inscription($_POST);
            
            
            
        }
}
}
    function inscription($data):void{
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
                    if(est_admin()){
                        $data['role'] = 'ROLE_ADMIN';
                    }else {
                        $data['role'] = 'ROLE_JOUEUR';
                    }
                    
                }else{
                   
                  
                    $_SESSION['arrayError'] = $arrayError;
                    header('location:'.WEB_ROUTE. '?controlleurs=security&views=inscription');
                }
                if ($password != $confpassword){
                    $arrayError['confpassword'] = 'les deux password ne sont pas identique';
                        }
                   
                        if(form_valid($arrayError)){
                            $data['role']=est_admin()?'ROLE_ADMIN': 'ROLE_JOUEUR';
                            if (upload_image($files)){
                            $data['avatar'] = $files['avatar']['name'];
                            add_user($data);
                            header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');
                            
                        }else{
                            $arrayError['avatar']="Erreur de telechargement";
                            $_SESSION['arrayError'] = $arrayError;
                            header('location:'.WEB_ROUTE. '?controlleurs=security&views=inscription');
                            
                        }

                        }


    
        if(count($arrayError)==0){
            //appel  du model
            $user = find_login_password($login, $password);
            if (count($user)==0){
                $arrayError['erreurConnexion'] = "Login ou Password Incorrecte";
                $_SESSION['arrayError'] = $arrayError;
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=inscription');
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
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=inscription');
    }
    }

    function connexion(string $login, string $password):void{
        $arrayError=[];
        validation_login($login, 'login', $arrayError);
        validation_password($password, 'password', $arrayError);
        if(form_valid($arrayError)){
            
            //appel  du model
        if (form_valid($arrayError)){
            $user = find_login_password($login, $password);
            if (count($user)==0){
                $arrayError['erreurConnexion'] = "";
                $_SESSION['arrayError'] = $arrayError;
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');
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
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');
    }
}
function deconnexion():void{
    unset ($_SESSION['userConnect']);
    header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');

}
}
?>