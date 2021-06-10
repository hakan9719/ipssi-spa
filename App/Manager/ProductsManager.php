<?php

namespace App\Manager;
use Vendor\Manager\Manager;

class ProductsManager extends Manager{

    protected $db;
    protected $table = "products";


    public function create ($product)
    {
        $statement = "INSERT INTO products (name, description, price) 
                        VALUES (:name, :description, :price)";
        
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":name", $product->getName());
        $prepare->bindValue(":description", $product->getDescription());
        $prepare->bindValue(":price", $product->getPrice());

        $prepare->execute();
    }
    
    public function getOne($id)
    {
        $query = $this->db->query("SELECT * FROM products WHERE id =".$id['id']);
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Products")[0];
    }

    public function update($product, $id)
    {
        $statement = "UPDATE products SET name = :name, description = :description, price = :price WHERE id =".$id." ";

        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":name", $product->getName());
        $prepare->bindValue(":description", $product->getDescription());
        $prepare->bindValue(":price", $product->getPrice());

        $prepare->execute();
    }


    public function delete($id)
    {
        $query = $this->db->query("DELETE FROM products WHERE id =".$id['id']);
    }

}