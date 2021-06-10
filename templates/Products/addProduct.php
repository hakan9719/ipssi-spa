<?php

require ROOT."/templates/headerView.php";

?>
<body>
    <form action="" class="form" method="POST">
        <div class="form-group">
            <label for="title" class="form-label">Titre:</label>
            <input type="text" class="form-control" name="name" id="title" value="Nom Produit">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Contenu:</label>
            <input type="text" class="form-control" name="description" id="content" value="lorem ipsum dolor sit amet">
        </div>
        <div class="form-group">
            <label for="categorie" class="form-label">categorie:</label>
            <input type="number" class="form-control" name="price" id="categorie" value="1">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>