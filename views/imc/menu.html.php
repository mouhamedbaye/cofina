<?php require 'header.imc.html.php';?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if(est_connect()): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php WEB_ROUTE. '?controlleurs=admin&views=liste.question' ?>">Liste des questions <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php WEB_ROUTE. '?controlleurs=security&views=inscription' ?>">Creer Admin <span class="sr-only"></span></a>
            </li>

            <?php endif ?>
            <?php if(est_joueur()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php WEB_ROUTE. '?controlleurs=admin&views=jseu' ?>">Liste des joueurs</a>
            </li>
            <?php endif ?>
           
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if(est_connect()): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php WEB_ROUTE. '?controlleurs=admin&views=deconnexion' ?>">DECONNEXION<span class="sr-only"></span></a>
            </li>

            <?php endif ?>
        </ul>
       
    </div>
</nav>
<?php require 'footer.imc.html.php'; ?>