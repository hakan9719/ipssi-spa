<?php 
require "headerView.php";
?>

<div class="container p-2">
    <div class="row">
        <img src="https://fakeimg.pl/286x180/?text=<?php echo $product->getName() ?>" class="col-6" alt="image produit">
        <div class="col-6">
            <div class="col-6">
                <p>Nom du produit : <?php echo $product->getName() ?></p>
            </div>
            <div class="col-6">
                <p>Prix : <?php echo $product->getPrice() ?>€</p>
            </div>
            <div class="col-12">
                <a href="/spa/public?page=deleteProduct&id=<?php echo $product->getId() ?>" class="btn btn-danger">Supprimer ce produit</a>
                <a href="/spa/public?page=updateProduct&id=<?php echo $product->getId() ?>" class="btn btn-secondary">Modifier ce produit</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <p>Description du produit :</p>
        <p><?php echo $product->getDescription() ?></p>
    </div>
</div>
        

    
    
</body>
</html>