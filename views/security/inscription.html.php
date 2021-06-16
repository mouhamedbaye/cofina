<?php
  
if(isset($_SESSION['arrayError'])){

  $arrayErrors=  $_SESSION['arrayError'];

  unset($_SESSION['arrayError']);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE."css/stylei.css"?>">
  </head>
  <body >
  
     
            <div id="tete">
                <div><img class="foto" src="<?=WEB_ROUTE."img/e221.png"?>" alt="image fond d ecran"/> </div>
                <div id="text"><h1> Le plaisir de jouer </h1></div>
            </div>
            

            <div id="login">
                <img class="fotoo" src="img/fond.png" alt=""/> 
             
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-5">
                            <div id="login-box" class="col-md-12">
                            <?php if (isset($arrayErrors['erreurConnexion'])): ?>
                            <div class="alert alert-Danger" role="alert">
                                <strong><?php echo isset($arrayErrors['erreurConnexion']) ? $arrayErrors['erreurConnexion'] : ''?></strong>
                            </div>
                            <?php endif; ?>
                                <form id="" class="foorm" method="POST" action="<?php echo WEB_ROUTE ?>">
                                
                                    <h3 class="ins">S'INSCRIRE</h3><p>Pour tester votre niveau de culture</p><br>
                                    <div class="ava"> 
                                        <img class="prin" src="img/prinse.jpeg" alt=""/> 
                                        <p class="clax">Avatar du joueur</p>
                                    </div>
                                    <div id="trait"></div>
                                        <input type="hidden" name="controlleurs" value="security"/>
                                        <input type="hidden" name="action" value="inscription"/>
                                    <div class="form-group">
                                            <label for="password" class="prenom">Prenom</label><br>
                                            <input type="text" name="prenom" id="prenom" placeholder="Aaaaa"  class="formm">
                                            <small><?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] :''; ?></small>
                                    </div>
                                    <div class="form-group">
                                            <label for="password" class="prenom">Nom</label><br>
                                            <input type="text" name="nom" id="nom" placeholder="BBBB"  class="formm">
                                            <small><?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom'] :''; ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="prenom">Login</label><br>
                                        <input type="text" name="login" id="adress email" placeholder="aabaab" class="formm">
                                        <small><?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] :''; ?></small>
                                    </div>
                                    <div class="form-group ligne">
                                        <label for="password" class="prenom">Password</label><br>
                                        <input type="password" name="password" id="password" placeholder="......."  class="fformm">
                                        <small><?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] :''; ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="prenom">Confirmer Password</label><br>
                                        <input type="password" name="confpassword" id="password" placeholder="......."  class="fformm">
                                        <small><?php echo isset($arrayErrors['confpassword']) ? $arrayErrors['confpassword'] :''; ?></small>
                                    </div>
                                    <div class="form-group">
                                            <br>
                                        <div id="idd">
                                            <div><label for="password">Avatar</label>
                                                <input type="file" name="avatar" value="none">
                                            </div>
                                            <button type="submit" name="connexion" class="formmm" value="Connexion">Creer Compte</button>
                                            <!--<button type="submit" name="fichier" class="fichier" value="Connexion">Choisir un Fichier</button>-->
                                        </div>
                                    </div>
                                        <div 
                                            id="register-link" class="text-right">
                                        </div>
                                        <a href="<?=WEB_ROUTE. '.?controlleurs=security&views=connexion'?>">Connexion</a>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

