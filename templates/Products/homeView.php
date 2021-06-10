<?php

require ROOT."/templates/headerView.php";
?>
    <div class="container p-2">
        <div class="row d-flex justify-content-between">
            <h3 class="col-6">Liste de nos produits dérivés</h3>
            <a href="/spa/public?page=addProduct" class="col-2 btn btn-secondary">Ajouter un produit</a>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($products as $value): ?>
            <div class="card col-6" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src='https://fakeimg.pl/286x180/?text=<?php echo $value->getName() ?>' alt="Image Produit">
                <div class="card-body">
                    <h5 class="card-title"><?= $value->getName() ?></h5>
                    <p class="card-text"><?= $value->getDescription() ?></p>
                    <p class="card-text">Prix : <?= $value->getPrice() ?>€</p>
                    <a href="/spa/public?page=product&id=<?php echo $value->getId() ?>" class="btn btn-secondary">Plus d'infos</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>