<?php
  
if(isset($_SESSION['arrayError'])){
  $arrayErrors=  $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}

?>
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
            
        </div>
          <div class="row">
            
              <?php require_once(ROUTE_DIR.'views/imc/menu.html.php')?>
            
              <div class="appell col-md-6">
                <form method="post" action="<?WEB_ROUTE ?>"></form>
                <input type="hidden" name="controlleurs" value="admin"/>
                <input type="hidden" name="action" value="creation.admin"/>
                     <div class="liste">
                         <p class="text-center">PARAMETREZ VOS QUESTIONS</p>
                    </div>
    <div class="tablle">
                <div class="form-group poisson">
                    <div class="div">QUESTIONS</div>
                    <input type="text" class="form-control champp" name="" id="" aria-describeby="helpId" placeholder="">
                    <small id="helpId" class="form-text text muted">
                    <?=isset($arrayErrors['question']) ? $arrayErrors['question'] :''; ?>
                    </small>
                    
                </div>
                <div class="form-group">
                    <div class="divv">Nbre de Points</div>
                    <div class="col-auto my-1 shamp">
                      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"></label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="divvv">Type de Réponse</div>
                    <select class ="form-control sans" name="" id="">
                        <option>Donner le type de la reponse</option>
                        <option>Text</option>
                        <option>Simple</option>
                        <option>Choix multiple</option>
                    </select>
                    <button type="submit" name="plus" class="btn btn-danger addition">+</button>                    
                </div>
                <?php $nbr_reps = $_SESSION['nbr_reps'];?>
                <?php for ($i=1 ; $i <= $nbr_reps; $i++) : ?>
                <div class="form-group">
                    <div class="diiv">Répponse1</div>
                    <input type="text" class="form-control centt" name="" id="" aria-describeby="helpId" placeholder="">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input supprimer" name="check" value="">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input radio" name="radio" value="">
                        </label>
                        
                    </div>
                    
                </div>
                <?php endfor ?>
                <button type="submit" class="btn-btn-danger enregistrer" name="btn_submit">Enregister</button>
    </div>
            
          
          </div>
      </div>
      <style>
        .divv{
          margin-top:20px;
        }
                .liste{
            margin-top:60px;
            margin-left:-140px;
            font-family:bold;
            font-size:26px;
            color:red;
          }
          .div{
              margin-top:17px;
          }
          .champp{
              width: 300px;
              margin-left:120px;
              margin-top:-28px;
              background-color:#e7e2e2;
              box-shadow :1px 2px 2px red;
          }
          .shamp{
            width: 130px;
              margin-left:120px;
              margin-top:50px;
             
          }
          .sans{
            width: 300px;
              margin-left:130px;
              margin-top:-28px;
              background-color:#e7e2e2;
          }
          .addition{
            margin-left:450px;
              margin-top:-64px;
          }
          .centt{
            width: 300px;
            margin-left:100px;
              margin-top:-30px;
              background-color:#e7e2e2;
          }
          .supprimer{
            margin-left:450px;
              margin-top:-25px;
          }
          .radio{
            margin-left:400px;
              margin-top:-40px;
              
          }
          .enregistrer{
            background-color:#C90017;
            width: 110px;
            height: 30px;
            margin-left:370px;
            color:white;
            border-radius:2px;
            margin-top:106px;
          }
.tablle{
            border:1px solid grey;
            width: 500px;
            height: 400px;
            margin-top:40px;
            margin-left:15px;
          }
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
      </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>