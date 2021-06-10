<?php 

require "headerView.php";
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
    
    </div>

    
</body>
</html>