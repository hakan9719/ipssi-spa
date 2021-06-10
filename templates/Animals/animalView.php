<?php 
require ROOT."/templates/headerView.php";
?>

<div class="container p-2">
    <div class="row">
        <img src="https://fakeimg.pl/286x180/?text=<?php echo $animal->getName() ?>" class="col-6" alt="image produit">
        <div class="col-6">
                <p>Nom de l'animal : <?php echo $animal->getName() ?></p>
                <p>Espèce de l'animal : <?php echo $animal->getSpecies() ?></p>           
                <p>Race de l'animal : <?php echo $animal->getRace() ?></p>           
                <p>Taille de l'animal : <?php echo $animal->getSize() ?></p>           
                <p>Date de naissance de l'animal : <?php echo $animal->getBirthdate() ?></p>           
                <p>Sexe de l'animal : <?php echo $animal->getGender() ?></p>           
                <p>Couleur de l'animal : <?php echo $animal->getColor() ?></p>           
                <p>Localisation de l'animal : <?php echo $animal->getLocation() ?></p>                      
            <div class="col-12">
                <a href="/spa/public/?page=deleteAnimal&id=<?php echo $animal->getId() ?>" class="btn btn-danger">Retirer cet animal</a>
                <a href="/spa/public/?page=updateAnimal&id=<?php echo $animal->getId() ?>" class="btn btn-secondary">Modifier la fiche de l'animal</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <p>Description de l'animal :</p>
        <p><?php echo $animal->getDescription() ?></p>
    </div>

        <hr>
        <div class="row">
            <form class="col-6 " action="" method="post">
                <h2>Réserver <?=$animal->getName()?></h2>
                <label class="form-label" for="lastename">Nom</label>
                <input class="form-control" type="text" name="lastename" id="lastename">
                
                <label class="form-label" for="firstname">Prénom</label>
                <input class="form-control" type="text" name="firstname" id="firstname">
                
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
                
                <button class="btn btn-primary mt-3" type="submit" >Réserver</button>
            </form>
        </div>
    
    </div>
    
</body>
</html>