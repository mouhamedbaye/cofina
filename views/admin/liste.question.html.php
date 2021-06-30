
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
                
                     <div class="liste">
                             <p class="text-center">Nbre de Question</p>
                    </div>
                    <div class="num"><input type="page" class="form-control numero" name="number" id="" aria-describeby="" placeholder="5"></div>
                    <div class="okk"><button type="submit" class="btn-btn ok">OK</button></div>

                
                    <div class="tablle">
                        
                        <div class="form-check">
                        <div class="phrase">
                            <p>1. Les langages Web</p>
                        </div>
                            <input class="form-check-input rinsin" type="checkbox" name="choix" value="" id="">
                            <label class="form-check-label rinsinn" for="">
                                HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="checkbox" name="choix"value="" id="">
                            <label class="form-check-label rinsinn" for="">
                                R
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="checkbox" name="choix"value="" id="" >
                            <label class="form-check-label rinsinn" for="">
                                JAVA
                            </label>
                        </div>
                        <div class="phrase">
                            <p>2. D'ou vient le corona?</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label rinsinn" for="exampleRadios1">
                                Italie
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label rinsinn" for="exampleRadios2">
                                Chine
                            </label>
                        </div>
                        <div class="phrase">
                            <p>3. Quel terme defini le langage qui s'adapte sur <br> Android et sur Ios?</p>
                        </div>
                        <input type="text" class="form-control champp" name="" id="" aria-describeby="helpId" placeholder=""><br>
                        <div class="phrase">
                            <p>4. Quelle est le premiere école de codage gratuite <br> au Sénégal?</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios1" value="option3" checked>
                            <label class="form-check-label rinsinn" for="exampleRadios1">
                                Simplon
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios2" value="option4">
                            <label class="form-check-label rinsinn" for="exampleRadios2">
                                Orange Digital Center
                            </label>
                        </div>
                        <div class="phrase">
                            <p>5. Les precurseurs de la révolution digital?</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios1" value="option5" checked>
                            <label class="form-check-label rinsinn" for="exampleRadios1">
                                GAFAM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rinsin" type="radio" name="exampleRadios" id="exampleRadios2" value="option6">
                            <label class="form-check-label rinsinn" for="exampleRadios2">
                                CIA-FBI
                            </label>
                        </div>
                    </div><br>
                    <div class="suivre">
                <a href="<?=WEB_ROUTE. '.?controlleurs=security&views=connexion'?>">SUIVANT</a>
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
      .num{
            
              
          }
          .numero{
            margin-left:390px;
              margin-top:-50px; 
              width: 47px;
              color:red;
              border-radius:5px solid red;
          }
          .okk{
              margin-left:480px;
              margin-top:-35px; 
            color:red;
          }
        
          .ok{
            background-color:#C90017;
            
            color:white;
            border-radius:2px;
           
            
          }
          .rinsinn{
            margin-left:75px;
          }
          .rinsin{
              margin-left:50px;
              color:red;
          }
            .champp{
              width: 200px;
              margin-left:50px;
              margin-top:-15px;
              
              background-color:#e7e2e2;
              }
          .phrase{
              margin-top:19px;
              margin-left:-50px;
              color:grey;
              font-family:bold;
          }
           .liste{
            margin-top:40px;
            margin-left:-140px;
            font-family:bold;
            font-size:26px;
            color:red;
          }
          
.tablle{
            border:1px solid grey;
            width: 500px;
            height: 500px;
            margin-top:40px;
            margin-left:15px;
          }
   .appell{
            margin-top: 15px;
            background-color:white;
            border-radius:10px;
            height: 660px;
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