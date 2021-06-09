<?php

require "headerView.php";
use App\Entity\Animal;
use App\Manager\AnimalManager;


$animal = new Animal();
// vd($animal);

$animalManagers = new AnimalManager();
// vd($animalManagers->getAnimals());

$animals = $animalManagers->getList();
$animal = new Animal();
// vd($animal);

$animalManagers = new AnimalManager();
// vd($animalManagers->getAnimals());

$animals = $animalManagers->getList();
?>