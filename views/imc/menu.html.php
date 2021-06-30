<?php require 'header.imc.html.php';?>
<div class="col-md-4 aap">
                    <div class="card">
                        <img class="prinn" src="img/prinse.jpeg" alt=""/> 
                        <p>Aaa Bbb</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste.question'?>">Liste des questions <i class="pluss far fa-list-alt"></i></a>
                        </li>
                        <li class="nav-item creadm">
                            <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&views=creation.admin' ?>">Creer Admin <i class="cre fas fa-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.joueur' ?>">Liste Joueurs 
                            <i class="plusss far fa-list-alt"></i> </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link " href="<?= WEB_ROUTE. '?controlleurs=admin&views=creation.question' ?>">Créer question <i class="cree fas fa-plus"></i> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= WEB_ROUTE. '?controlleurs=admin&views=liste.admin' ?>">Liste Admin <i class="plu far fa-list-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= WEB_ROUTE. '?controlleurs=admin&views=tableau.bord' ?>">Tableau de Bord <i class="pllu far fa-list-alt"></i></a>
                        </li>
                    </ul>
 </div>
<?php require 'footer.imc.html.php'; ?>