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

    public function product($id)
    {
        $product = $this->manager->getOne($id);
        include ROOT."/templates/Products/product.php";
    }

    public function deleteProduct($id)
    {
        $product = $this->manager->delete($id);
        header("Location:/spa/public/?page=shop");
    }


    public function addProduct(/* $data */)
        {
            if (!empty($_POST)) {
                $product = new Products();
                $product->hydrate($_POST);
                $this->manager->create($product);
                header("Location:/spa/public/?page=shop");
            }
            include ROOT."/templates/Products/addProduct.php";
        }

    public function updateProduct(/* $data */)
        {
            if (!empty($_POST)) {
                $product = new Products();
                $product->hydrate($_POST);
                $id = $_GET['id'];
                $this->manager->update($product, $id);
                header("Location:/spa/public/?page=product&id=$id");
            }
            $id = $_GET['id'];
            $product = $this->manager->getOne(['id'=>$id]);
            include ROOT."/templates/Products/addProduct.php";
        }
}