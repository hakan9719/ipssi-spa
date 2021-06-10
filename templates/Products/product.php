<?php

require ROOT."/templates/headerView.php";

?>
    <div class="container">
        <div class="row">
            <div class="col-4 border p-2 m-2">
                <p>Nom :</p>
                <p class="p-0"><?=$product->getName()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Date de naissance :</p>
                <p class="p-0"><?=$product->getDescription()?></p>
            </div>
            <div class="col-4 border p-2 m-2">
                <p>Race :</p>
                <p class="p-0"><?=$product->getPrice()?></p>
            </div>
        </div>
        <button><a href="/spa/public?page=deleteProduct&id=<?php echo $product->getId() ?>">Delte</a></button>
        <button><a href="/spa/public?page=updateProduct&id=<?php echo $product->getId() ?>">update</a></button>

    
    </div>

    
</body>
</html>