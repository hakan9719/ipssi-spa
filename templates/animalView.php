<?php 

require "headerView.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-4 border p-2 m-2">
                <p>Nom :</p>
                <p class="p-0"><?=$animal->getName()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Date de naissance :</p>
                <p class="p-0"><?=$animal->getBirthdate()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Race :</p>
                <p class="p-0"><?=$animal->getRace()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Couleur :</p>
                <p class="p-0"><?=$animal->getColor()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Sexe :</p>
                <p class="p-0"><?=$animal->getGender()?></p>
            </div>
            <div class="col-12 border p-2 m-2">
                <p>Description :</p>
                <p class="p-0"><?=$animal->getDescription()?></p>
            </div>
        </div>


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