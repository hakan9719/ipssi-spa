<?php

require ROOT."/templates/headerView.php";

?>
<div class="container">
    <div class="d-flex justify-content-between">
    <?php foreach ($products as $value): ?>
        <?php $id = $value->getId() ?>
        <li class="border"> <?= $value->getName() ?></li>
        <button><a href="/spa/public?page=product&id=<?php echo $id?>" >Voir un produit</a></button>
        <?php endforeach; ?>
    </div>
    <button><a href="/spa/public?page=addProduct">Ajouter un produit</a></button>
</div>
</body>

</html>