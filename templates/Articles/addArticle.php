<?php
require ROOT."/templates/headerView.php";
?>
<div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4" style="background-color: #f8f9fa;">
            <h1 class="display-4 py-2 text-truncate">
              Ecrire un article
            </h1>
            <div class="px-2" >
                <form action="" class="form justify-content-center" method="POST">
                    <div class="form-group">
                        <label for="title" class="form-label">Titre:</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?=isset($article)?$article->getTitle():''?>">
                    </div>
                    <div class="form-group">
                        <label for="content" class="form-label">Contenu:</label>
                        <textarea type="text" class="form-control" name="content" id="content">
                            <?=isset($article)?$article->getContent():''?>
                        </textarea>
                    </div>  
                        <button style="margin-top: 10px;" class="btn btn-secondary">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>