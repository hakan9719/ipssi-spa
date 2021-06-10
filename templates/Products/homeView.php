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
    <div class="d-flex justify-content-between">
    <?php foreach ($products as $value): ?>
        <li class="border"> <?= $value->getName() ?></li>
        <?php endforeach; ?>
    </div>
    <button><a href="/spa/public?page=addProduct">Ajouter un produit</a></button>
</body>

</html>