<?php 
require ROOT."/templates/headerView.php";
?>


<div class="container p-2">
    <div class="row">
        <img src="https://fakeimg.pl/286x180/?text=<?php echo $articles->getTitle() ?>" class="col-6" alt="image produit">
        <div class="col-6">
                <p>Titre de l'article : <?php echo $articles->getTitle() ?></p>           
            <div class="col-12">
                <a href="/spa/public/?page=supprimerArticle&id=<?php echo $articles->getId() ?>" class="btn btn-danger">Supprimer cet article</a>
                <a href="/spa/public/?page=modifierArticle&id=<?php echo $articles->getId() ?>" class="btn btn-danger">Modifier cet article</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <p>Contenu de l'article :</p>
        <p><?php echo $articles->getContent() ?></p>
    </div>
</div>
        

    
    
</body>
</html>