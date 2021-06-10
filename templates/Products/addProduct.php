<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php

require "headerView.php";
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