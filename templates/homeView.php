<?php

require "headerView.php";
use App\Entity\Animals;
use App\Manager\AnimalsManager;


$animal = new Animals();
// vd($animal);

$animalManagers = new AnimalsManager();
// vd($animalManagers->getAnimals());

$animals = $animalManagers->getList();
$animal = new Animals();
// vd($animal);

$animalManagers = new AnimalsManager();
// vd($animalManagers->getAnimals());

$animals = $animalManagers->getList();
?>