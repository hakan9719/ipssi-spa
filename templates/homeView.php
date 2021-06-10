<?php

require "headerView.php";

use App\Manager\AnimalsManager;


$animalManagers = new AnimalsManager();

$animals = $animalManagers->getTinyList();

?>

<div class="container">
    <div class="row">
        <h1 class="text-center">Page d'accueil SPA Association</h1> 
        <div class="row col-6">
            <h3 class="col-6">L'association</h3> 
            <p class="col-7">La Société Protectrice des Animaux (SPA) est la première association de protection animale en France. Elle a été créée en 1845 et reconnue d’utilité publique en 1860.</p>
            <p class="col-7">La SPA agit quotidiennement pour assurer la protection et la défense des animaux sur l'ensemble du territoire.</p>
        </div>  
        <img src="https://fakeimg.pl/286x180/?text=chien" class="col-6" alt="image Animal">
    </div>
    <hr>
    <div class="row">
    <h3 class="text-center">Nos derniers arrivants :</h3>
    <?php foreach ($animals as $value): ?>
            <div class="card col-6" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src='https://fakeimg.pl/286x180/?text=<?php echo $value->getName() ?>' alt="Image animal">
                <div class="card-body">
                    <h5 class="card-title"><?= $value->getName() ?></h5>
                    <p class="card-text"><?= $value->getDescription() ?></p>
                    <a href="/spa/public/?page=animal&id=<?php echo $value->getId() ?>" class="btn btn-secondary">Plus d'infos</a>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    <hr>
    <div class="row">
        <h3 class="text-center">Pour nous faire un don :</h3>
        <form action="" class="form justify-content-center" method="POST">
            <div class="form-group">
                <label for="title" class="form-label">Nom :</label>
                <input type="text" class="form-control" name="lastName" id="lastName" value="Nom">
            </div>
            <div class="form-group">
                <label for="title" class="form-label">Prénom :</label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="Prénom">
            </div>
            <div class="form-group">
                <label for="categorie" class="form-label">Montant de la donation :</label>
                <input type="number" class="form-control" name="donation" id="donation" value="1">
            </div>  
            <div class="form-group">
                    <label for="content" class="form-label">Message :</label>
                    <textarea type="text" class="form-control" name="message" id="message" value="message"></textarea>
            </div>
            <button style="margin-top: 10px;" class="btn btn-secondary">Valider</button>
        </form>
    </div>
</div>