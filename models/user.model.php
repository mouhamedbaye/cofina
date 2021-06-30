<?php
    function find_login_password(string $login,string $password):array{
        // 1 lire contenu fichier
        $json= file_get_contents(ROUTE_DIR. 'data/user.data.json');
        // 2 convertir le json en tableau
        $arrayUser= json_decode($json, true); 

    foreach($arrayUser as $user){
        if($user['login']== $login && $user['password']== $password){
        return $user;
        }

    }
    return [];
}
function add_user(array $user){
    // 1 lire contenu fichier
    $json = file_get_contents(FILE_USERS);
    // 2 convertir le json en tableau
    $arrayUser = json_decode($json, true);
    $arrayUser[]= $user;
    // 3 convertir le tableau en json
    $json = json_encode($arrayUser);
    file_put_contents(FILE_USERS, $json);
}
function login_exist(string $login):bool{
    $arrayUser = find_all_users();
    foreach($arrayUser as $user){
        if ($user['login']==$login){
            return true;
        }
    }
    return false;
}
/* if (empty($data['id'])){
function add_user(array $user){
        $json = fil_get_contents(ROUTE_DIR. 'data/user.data.json');
        $arrayUser= json_decode($json,true);
        $user['id']=uniqid();
        $arrayUser[]=$user;
        $json = json_encode($arrayUser);
        file_put_contents(ROUTE_DIR. 'data/user.data.json' , $json);
    }
} */
function login_existt(string $login):bool{
    $json = fil_get_contents(ROUTE_DIR. 'data/user.data.json');
    $arrayUser = json_decode($json,true);
    foreach($arrayUser as $user){
        if ($user['login']==$login){
            return $user;
        }
    }

    return [];
}
function add_question(array $question){
    $json = fil_get_contents(ROUTE_DIR. 'data/question.json');
    $arrayQuestion= json_decode($json,true);
    $arrayQuestion[]= $question;
    ajout_question($arrayQuestion);

}
function find_user_by_id(string $id):array{
    $json = fil_get_contents(ROUTE_DIR. 'data/user.data.json');
    $arrayUser = json_decode($json,true);
    foreach($arrayUser as $user){
        if ($user['id']==$id){
            return $user;
        }
    }
    return [];
}
function delete_question(string $id):bool{
    $json = fil_get_contents(ROUTE_DIR. 'data/question.json');
    $arrayQuestion = json_decode($json,true);
    $user[]=$arrayQuestion;
    $ok=false;
    foreach($users as $user){
        if ($user['id']!= $id){
            $ok = true;
        }
    }
        return $ok;
}
function find_question_id(string $id):array{
    $json = fil_get_contents(ROUTE_DIR. 'data/question.json');
    $arrayQuestion = json_decode($json,true);
    foreach($arrayQuestion as $question){
        if ($user['id']!= $id){
            return $question;
        }
    }
        return [];
}
function edit_question(string $id){
    $json = fil_get_contents(ROUTE_DIR. 'data/question.json');
    $arrayQuestion = json_decode($json,true);
    foreach($arrayQuestion as $question =>$new_id){
        if ($old_id['id']== $new_id['id']){
            $arrayQuestion[$question] = $new_id;
        }
    }
    ajout_question($arrayQuestion);
}
function modify_user(string $user_new){
    $json = fil_get_contents(ROUTE_DIR. 'data/user.data.json');
    $arrayQuestion = json_decode($json,true);
    foreach($arrayUser as $key =>$user_old){
        if ($user_old['id']== $user_new['id']){
            $arrayUser[$key] = $user_new;
        }
    }
    ajout_fichier($arrayUser);
}
function ajout_fichier(array $array){
    $json = json_encode($array);
    file_put_contents(ROUTE_DIR. 'data/user.data.json', $json);
}
function ajout_question(array $array){
    $json = json_encode($array);
    file_put_contents(ROUTE_DIR. 'data/question.json', $json);
}

?>