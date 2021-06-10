<?php

$routes = [
    "animals" => ["controller" =>"AnimalsController", "method" => "animals"],
    "animal" => ["controller" =>"AnimalsController", "method" => "animal", "param" => ["id" => $_GET['id']??'']],
    "home" => ["controller" =>"AnimalsController", "method" => "home"],
    "shop" => ["controller" => "ProductsController", "method" => "home"],
    "addProduct" => ["controller" => "ProductsController", "method" => "addProduct"],

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
}else{
    include "../templates/404View.php";
}