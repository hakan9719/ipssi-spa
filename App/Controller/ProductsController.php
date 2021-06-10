<?php

namespace App\Controller;

use App\Entity\Products;
use App\Manager\ProductsManager;

class ProductsController {

    public function __construct()
    {
        $this->manager = new ProductsManager;
    }

    public function home()
    {
        $products = $this->manager->getList();
        include ROOT."/templates/Products/homeView.php";
    }

    public function addProduct(/* $data */)
        {
            if (!empty($_POST)) {
                $animal = new Products();
                $animal->hydrate($_POST);
                $this->manager->create($animal);
                header("Location:/spa/public/?page=shop");
            }
            include ROOT."/templates/Products/addProduct.php";
        }
}