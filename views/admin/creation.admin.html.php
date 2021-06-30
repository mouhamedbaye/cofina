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
    <script src="http://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <div id="tete">
                <div><img class="foto" src="<?=WEB_ROUTE."img/e221.png"?>" alt="image fond d ecran"/> </div>
                <div id="text"><h1> Le plaisir de jouer </h1></div>
            </div>
  <body>
      <div class="container">
      <div class="cards">
            <div class="car card-">
              CREER ET PARAMETREZ VOS QUIZZ
            </div>
            <div class="deco">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <?php if(est_connect()): ?>
                  <li class="nav-item active">
                      <a class="nav-link" href="<?php WEB_ROUTE. '?controlleurs=admin&views=deconnexion' ?>">DECONNEXION<span class="sr-only"></span></a>
                  </li>

                  <?php endif ?>
              </ul>
            </div>
        </div>
          <div class="row">
          <?php require_once(ROUTE_DIR.'views/imc/menu.html.php')?>
            <div class="appell col-md-6">
                
            <form id="" class="foorm" method="POST" action="<?php echo WEB_ROUTE ?>">
                                <h3 class="ins">S'INSCRIRE</h3><br><p>Pour tester votre niveau de culture</p>
                               
                                <div id="trait"></div>
                                    <input type="hidden" name="controlleurs" value="admin"/>
                                    <input type="hidden" name="action" value="<?=!isset($users['id']) ? 'inscription' : 'edit'; ?>"/>
                                    <input type="hidden" name="id" value="<?=isset($users['id']) ? $users['id'] : ''; ?> "/>
                                    <?php if (isset($arrayErrors['arrayConnexion'])): ?>
                                    <?php echo isset($arrayErrors['arrayConnexion']) ? $arrayErrors['arrayConnexion'] : ''; ?>
                                    <?php endif; ?>
                                <div class="form-group">
                                        <label for="password" class="prenom">Prenom</label><br>
                                        <input type="text" name="prenom" id="prenom" value="<?=isset($users['prenom']) ? $users['prenom'] : ''; ?>" placeholder="Aaaaa"  class="formm">
                                        <small><?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] :''; ?></small>
                                </div>
                                <div class="form-group">
                                        <label for="password" class="prenom">Nom</label><br>
                                        <input type="text" name="nom" id="nom" value="<?=isset($users['nom']) ? $users['nom'] : ''; ?>" placeholder="BBBB"  class="formm">
                                        <small><?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom'] :''; ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="prenom">Login</label><br>
                                    <input type="text" name="login" id="adress email" value="<?=isset($users['login']) ? $users['login'] : ''; ?>" placeholder="aabaab" class="formm">
                                    <small><?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] :''; ?></small>
                                </div>
                                <div class="form-group ligne">
                                    <label for="password" class="prenom">Password</label><br>
                                    <input type="password" name="password" id="password" value="<?=isset($users['password']) ? $users['password'] : ''; ?>" placeholder="......."  class="fformm">
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
                                        <?php echo isset($arrayErrors['avatar']) ? $arrayErrors['avatar'] : ''; ?>
                                        <button type="submit" name="inscripion" class="formmm btn btn-danger tex-white" value="inscription" <?=!isset($users['id']) ? 'inscription' : 'modifier' ;?> >S'inscrire</button>
                                        <!--<button type="submit" name="fichier" class="fichier" value="Connexion">Choisir un Fichier</button>-->
                                    </div>
                                </div>
                                    <div 
                                        id="register-link" class="text-right">
                                    </div>
                                    
                            </form>
            </div>
                            
          </div>
      </div>
      <style>
          
          .appell{
            margin-top: 15px;
            background-color:white;
            border-radius:10px;
            height: 600px;
            margin-left:50px;
          }
 #tete{
    display:flex;
    justify-content: space-between;
    background-color:black;
    width: 101%;
    height: 150px;
}
#text{
  color:white ;
  text-align:center;
  margin-right:500px;
  margin-top:50px;
  font-family:fangsong;
}
.foto{
  width: 85px;
  height: 140px;
}

.formm{
width: 250px;
height: 45px;
margin-left:20px;
background-color:#f3eceb;
border-radius:10px;
}
.fformm{
width: 250px;
height: 45px;
margin-left:20px;
background-color:#f3eceb;
border-radius:10px;
border:3px solid #C90017;
box-shadow: 2px 1px 2px;
}
.formmm{
background-color:#C90017;
width: 110px;
height: 50px;
margin-left:15px;
color:white;
border-radius:10px;
}
.prenom{
    color:black;
    margin-left:25px;
    font-family:monospace;
}
#idd{
    display:flex;
    justify-content:space-around;
}
.fotoo{
    width: 100%;
    height:50%;
}
#trait{
    width: 290px;
    height: 2px;
    background-color:#C5C5C5;
}
small{
    color: red;
    margin-left: 18px;
    display: flex;
}
.prin{
    width: 80px;
    height: 80px;
    border-radius: 100%;
    margin-left: 360px;
    border:2px solid #C90017;
}
.ava{
    display: block;
}
.clax{
    margin-left: 340px;
    font-size: 20px;
}
.container{
  margin-top: 10px;
  background-color:#e7e2e2;
    height: 800px;
}
.app{
    background-color:white;
    height: 435px;
    margin-left:15px;
    margin-top:90px;
    
  }
  a{
    color:grey;
  }
  .appell{
            margin-top: 15px;
            background-color:white;
            border-radius:10px;
            height: 700px;
            margin-left:50px;
          }
  .appel{
    background-color:rgb(70, 66, 66);
    margin-left:55px;
    margin-top:50px;
    border-radius:2px;
  }
  .card{
    margin-left:-0px;
    width: 100%;
    height: 120px;
    background-color: #C90017;
    }
    .prinn{
      width: 80px;
      height: 80px;
      border-radius: 100%;
      margin-left: 18px;
      border:2px solid white;
        }
    p{
        margin-left: 100px;
        margin-top: -25px;
    }
    .banana{
      background-color: blanchedalmond;
    }
    .pluss{
        margin-left:100px;
        color: #C90017;
        font-size: 25px;
    }
    .plusss{
        margin-left:139px;
        color: grey;
        font-size: 25px;
    }
   .cre{
    margin-left:148px;
    color: grey;
    font-size: 25px;
    
   }
   .cree{
    margin-left:132px;
    color: grey;
    font-size: 25px;
   }
   .plu{
    margin-left:151px;
    color: grey;
    font-size: 25px;
   }
   .creadm:hover{
    background-color: grey ;
    border-left:5px solid green ;
    width: 200px;
    height: 50px;
    
   }
   .pllu{
    margin-left:118px;
    color: grey;
    font-size: 25px;
   }
   .cards{
    background-color: #C90017;
    height: 70px;
    margin-left:-15px;
    width: 1141px;
}
.car{
    text-align:center;
    color:white;
    font-family:fangsong;
    font-size:20px;
    margin-top:25px;
}
.deco{
    margin-left:900px;
    margin-top:-15px;
    background-color: green;
    width: 128px;
}
.deco a{
  color:white;
}
.card{
    margin-left:-14px;
    width: 380px;
    height: 120px;
    background-color: #C90017;
    }
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>