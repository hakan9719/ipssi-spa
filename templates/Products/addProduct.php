<?php
require ROOT."/templates/headerView.php";
?>
<div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4" style="background-color: #f8f9fa;">
            <h1 class="display-4 py-2 text-truncate">
                <?php if ($_GET["page"] == "updateProduct"){
                            echo 'Modifier un produit';
                        } else {
                            echo 'Ajouter un produit';
                        }
                ?>
            </h1>
            <div class="px-2" >
                <form action="" class="form justify-content-center" method="POST">
                    <div class="form-group">
                        <label for="title" class="form-label">Nom du produit :</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?=isset($product)?$product->getName():''?>">
                    </div>
                    <div class="form-group">
                        <label for="categorie" class="form-label">Prix :</label>
                        <input type="number" class="form-control" name="price" id="price" value="<?=isset($product)?$product->getPrice():''?>">
                    </div>  
                    <div class="form-group">
                            <label for="content" class="form-label">Description :</label>
                            <textarea type="text" class="form-control" name="description" id="description">
                                <?=isset($product)?$product->getDescription():''?>
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