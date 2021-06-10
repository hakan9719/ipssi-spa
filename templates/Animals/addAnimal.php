<?php

require ROOT."/templates/headerView.php";

?>
<div class="container">
    <h1 class="display-4 py-2 text-truncate">
        <?php if ($_GET["page"] == "updateAnimal"){
                    echo 'Modifier un animal';
                } else {
                    echo 'Ajouter un animal';
                }
        ?>
    </h1>


    <form action="" class="form" method="POST">

        <label for="name" class="form-label">Nom</label>
        <input type="text" name="name" id="name">

        <label for="species" class="form-label">Espèces</label>
        <input type="text" name="species" id="species">

        <label for="size" class="form-label">Taille</label>
        <input type="text" name="size" id="size">

        <label for="race" class="form-label">Race</label>
        <input type="text" name="race" id="race">

        <label for="gender" class="form-label">Sexe</label>
        <input type="text" name="gender" id="gender">

        <label for="birthdate" class="form-label">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate">

        <label for="color" class="form-label">Couleur</label>
        <input type="text" name="color" id="color">

        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description">

        <label for="location" class="form-label">Localisation</label>
        <input type="text" name="location" id="location">

        <button class="btn btn-primary">Submit</button>
    </form>
</div>
</body>

</html>