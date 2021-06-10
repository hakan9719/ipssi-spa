<?php

require ROOT."/templates/headerView.php";
?>
    <div class="container p-2">
        <div class="row d-flex justify-content-between">
            <h3 class=" text-center">Nos derniers dons</h3>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($donations as $value): ?>


                <div class="border rounded p-2 mt-3">
                    <h5 class="card-title">Donnateur : <?= $value->getLastName() ?> <?= $value->getFirstName() ?></h5>
                    <p class="card-text">Le message qu'il nous as laissé : <?= $value->getMessage() ?></p>
                    <p class="card-text">Montant de la donnation : <?= $value->getDonation() ?>€</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>