<?php

$routes = [
    "donations" => ["controller" => "DonationsController", "method" => "home"],
    "home" => ["controller" => "DonationsController", "method" => "addDonation"],

    "animal" => ["controller" =>"AnimalsController", "method" => "animal", "param" => ["id" => $_GET['id']??'']],
    "animals" => ["controller" =>"AnimalsController", "method" => "animals"],
    "addAnimal" => ["controller" =>"AnimalsController", "method" => "addAnimal"],
    "updateAnimal" => ["controller" =>"AnimalsController", "method" => "updateAnimal", "param" => ["id" => $_GET['id']??'']],
    "deleteAnimal" => ["controller" =>"AnimalsController", "method" => "deleteAnimal", "param" => ["id" => $_GET['id']??'']],
    
    "shop" => ["controller" => "ProductsController", "method" => "home"],
    "addProduct" => ["controller" => "ProductsController", "method" => "addProduct"],
    "product" => ["controller" => "ProductsController", "method" => "product", "param" => ["id" => $_GET['id']??'']],
    "deleteProduct" => ["controller" => "ProductsController", "method" => "deleteProduct", "param" => ["id" => $_GET['id']??'']],
    "updateProduct" => ["controller" => "ProductsController", "method" => "updateProduct", "param" => ["id" => $_GET['id']??'']],

    "home" => ["controller" =>"AnimalsController", "method" => "home",],
    "animals" => ["controller" =>"AnimalsController", "method" => "animals"],
    "animal" => ["controller" =>"AnimalsController", "method" => "animal", "param" => ["id" => $_GET['id']??'']],
    "blog" => ["controller" => "ArticleController", "method" => "articles"],
    "article" => ["controller" => "ArticleController", "method" => "article", "param" => ["id" => $_GET['id']??'']],
    "ecrireArticle" => ["controller" => "ArticleController", "method" => "addArticle"],
    "supprimerArticle" => ["controller" => "ArticleController", "method" => "deleteArticle", "param" => ["id" => $_GET['id']??'']],
];

if(isset($_GET["page"]) && array_key_exists($_GET["page"],$routes)){
    $case = $routes[$_GET["page"]];
    $caseController = "App\Controller\\".$case["controller"];
    $controller = new $caseController();
    $method = $case["method"];

    $param = null;
    if (isset($case["param"])) {
        $param = $case["param"];
    }
    
    $controller->$method($param);
} else {
    include "../templates/404View.php";
}