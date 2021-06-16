<?php
if(isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
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
    <script src="http://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE."css/style.css"?>">
  </head>
  <body class="bg-'./fond.png'">
  
  
      <div id="tete">
        <div><img class="foto" src="<?=WEB_ROUTE."img/e221.png"?>" alt="image fond d ecran"/> </div>
        <div id="text"><h1> Le plaisir de jouer </h1></div>
      </div>

    <div id="login">
            <img class="fotoo" src="img/fond.png" alt=""/> 
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-13">
                        <?php if (isset($arrayErrors['erreurConnexion'])): ?>
                        <div class="alert alert-Danger" role="alert">
                            <strong><?php echo isset($arrayErrors['erreurConnexion']) ? $arrayErrors['erreurConnexion'] : ''?></strong>
                        </div>
                        <?php endif; ?>
                        <form  class="foorm" action="<?php echo WEB_ROUTE ?>" method="POST">
                            <input type="hidden" name="controlleurs" value="security"/>
                            <input type="hidden" name="action" value="connexion"/>
                            
                                <div id="hhh"><h3 class="forrm">Login Form</h3><i class="fas fa-times  croix" ></i></div>
                                <br>
                            <div class="moi">
                                
                                <input type="text" name="login" id="adress email" placeholder="Login" class="formm">
                                <span><i class="fas fa-user"></i></span>
                                <small><?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] :''; ?></small>
                                </div>
                                
                                
                            
                            <div class="moi">
                                <input type="password" name="password" id="password" placeholder="Password"  class="formm">
                                <span> <i class="fas fa-lock"></i></span>
                                <small><?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] :''; ?></small>
                            </div>
                                
                               
                            
                            <div class="form-group">
                                <br>
                                <button type="submit" name="connexion" class="formmm" value="Connexion">connexion</button>
                            </div>
                            
                            <a href="<?=WEB_ROUTE. '.?controlleurs=security&views=inscription'?>">S'inscire en tant que joueur ?</a>
                        </form>
                        
                    </div>
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