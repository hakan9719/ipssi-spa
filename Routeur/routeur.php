<?php

// use App\Controller\ArticleController;

// switch ($_GET["page"]) {
//     case 'addArticle':
//         $controller = new ArticleController();
//         $controller->addArticle(/* $_POST */);
//         break;
//     case 'home':
//         $controller = new ArticleController();
//         $controller->home();
//         break;
    
//     default:
//         # code...
//         break;
// }


// $routes = [
//     "addArticle" => ["controller" =>"ArticleController", "method" => "addArticle"],
//     "home" => ["controller" =>"ArticleController", "method" => "home"],
//     "test" => ["controller" =>"ArticleController", "method" => "test", "param" => ["id" => $id]],
// ];
$routes = [
    "animals" => ["controller" =>"AnimalController", "method" => "animals"],
    "animal" => ["controller" =>"AnimalController", "method" => "animal", "param" => ["id" => $_GET['id']??'']],
    "home" => ["controller" =>"AnimalController", "method" => "home"],
];

// var_dump($_GET["page"]);
// var_dump(array_key_exists($_GET["page"],$routes));
// var_dump($routes);
if(array_key_exists($_GET["page"],$routes)){
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