<?php 

require "headerView.php";

?>
    <div class="container">
    <?php foreach($articles as $article): ?>
            <div class="row py-4">
                <div class="col-xs-12">
                    <h2><?=$article->getTitle()?></h2>
                    <p class="overflow-auto"><?=$article->getDescription()?></p>
                    <a href="index.php?page=article&id=<?=$article->getId()?>" class="btn btn-primary float-end">Read more</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>