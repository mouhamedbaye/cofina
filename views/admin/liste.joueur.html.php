
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
                    <div class="liste">
                                <p class="text-center">LISTE DES JOUEURS PAR SCORE</p>
                    </div>
              <div class=" table-borderless ">
            
                <table class="tablle">
                    <tbody>
                      <tr>
                        
                        <th scope="col">NOM</th>
                        <th scope="col">PRENOM</th>
                        <th scope="col">SCORE</th>
                      </tr>
                    
                      <tr>
                        
                        <td>SAMBOU</td>
                        <td>YAYA</td>
                        <td>1022 pts</td>
                      </tr>
                      <tr>
                       
                        <td>WONE</td>
                        <td>COUDY</td>
                        <td>963 pts</td>
                      </tr>
                      <tr>
                      
                        <td>KANDJI</td>
                        <td>DIAGNE</td>
                        <td>877 pts</td>
                      </tr>
                     
                        <td>NDIAYE</td>
                        <td>BABACAR</td>
                        <td>875 pts</td>
                      </tr>
                      
                        <td>NIASS</td>
                        <td>IMAM</td>
                        <td>870 pts</td>
                      </tr>
                     
                        <td>BARRO</td>
                        <td>MAMADOU</td>
                        <td>816 pts</td>
                      </tr>
                      
                        <td>CISSE</td>
                        <td>AMINA</td>
                        <td>816 pts</td>
                      </tr>
                     
                        <td>NDOYE</td>
                        <td>DEMBA</td>
                        <td>800 pts</td>
                      </tr>
                      
                        <td>TRAORE</td>
                        <td>PHENOMENE</td>
                        <td>797 pts</td>
                      </tr>
                      
                        <td>SEYNABOU</td>
                        <td>KA</td>
                        <td>763 pts</td>
                      </tr>
                      
                        <td>MBAYE</td>
                        <td>LIBASSE</td>
                        <td>760 pts</td>
                      </tr>
                      
                        <td>DIOUF</td>
                        <td>MOUHAMED</td>
                        <td>759 pts</td>
                      </tr>
                    </tbody>
                </table> <br>
                <div class="suivre">
                <a href="<?=WEB_ROUTE. '.?controlleurs=security&views=connexion'?>">SUIVANT</a>
                </div>
                
            </div>
            
          </div>
          </div>
      </div>
      <style>
         .suivre a{
          color:white;
          margin-left:17px;
          margin-top:20px;
        }
        .suivre{
          background-color:#C90017;
width: 110px;
height: 30px;
margin-left:390px;
color:white;
border-radius:10px;
        }
       tbody{
              color:grey;
          }
          .tablle{
            border:1px solid red;
            width: 500px;
            height: 500px;
            margin-top:30px;
            margin-left:15px;
          }
          .liste{
            margin-top:45px;
            margin-left:-90px;
            font-family:bold;
            font-size:26px;
          }
   .appell{
            margin-top: 15px;
            background-color:white;
            border-radius:10px;
            height: 700px;
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
.container{
  margin-top: 10px;
  background-color:#e7e2e2;
    height: 800px;
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
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>