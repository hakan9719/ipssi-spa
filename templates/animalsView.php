<?php 

require "headerView.php";

?>
    <div class="container">
        <div class="row">
            <?php foreach($animals as $animal): ?>
                <div class="col-3 mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/id/237/200/200" class="card-img-top" alt="...">
                        <div class="card-body h-25">
                            <h5 class="card-title"><?=$animal->getName()?></h5>
                            <p class="card-text h-25 overflow-auto"><?=$animal->getDescription()?></p>
                            <a href="/index.php?page=animal&id=<?=$animal->getId()?>" class="btn btn-primary">Go fiche Animal</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>