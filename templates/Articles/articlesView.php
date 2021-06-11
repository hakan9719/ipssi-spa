<?php 
require ROOT."/templates/headerView.php";
?>
    <div class="container p-2">
        <div class="row d-flex justify-content-between">
            <h3 class="col-6">Nos derniers Articles</h3>
            <a href="/spa/public/?page=ecrireArticle" class="col-2 btn btn-secondary">Ajouter un article</a>
        </div>
        <hr>
    <?php foreach($articles as $article): ?>
             <div style="width: 80%;" class="card mx-auto mb-3 mt-2">
                <img style="height: 400px;" src="https://fakeimg.pl/286x180/?text=<?=$article->getTitle()?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$article->getTitle()?></h5>
                        <p class="card-text"><?=$article->getDescription()?></p>
                        <a href="/spa/public/?page=article&id=<?= $article->getId() ?>" class="btn btn-secondary">Plus d'infos</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>