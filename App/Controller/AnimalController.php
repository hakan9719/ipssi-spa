<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Manager\AnimalManager;

class AnimalController {

    public function __construct()
    {
        $this->manager = new AnimalManager;
    }

    public function home()
    {
        $animals = $this->manager->getList();
        include ROOT."/templates/homeView.php";
    }

    public function animals()
    {
        $animals = $this->manager->getList();
        include ROOT."/templates/animalsView.php";
    }

    public function animal($id)
    {
        $animal = $this->manager->getOne($id);
        include ROOT."/templates/animalView.php";
    }

    public function addArticle(/* $data */)
        {
            if (!empty($_POST)) {
                $animal = new Animal();
                $animal->hydrate($_POST);
                $this->manager->create($animal);
                header("Location:index.php?page=animals");
            }
            include ROOT."/templates/addArticle.php";
        }
}