<?php

namespace App\Manager;
use Vendor\Manager\Manager;

class AnimalsManager extends Manager{

    protected $db;
    protected $table = "animals";


    public function create ($animal)
    {
        $statement = "INSERT INTO animals (name, species, size, race,gender,birthdate,color,description,location) 
                        VALUES (:name, :species, :size, :race,:gender,:birthdate,:color,:description,:location)";
        
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":name", $animal->getName()) ;
        $prepare->bindValue(":species", $animal->getSpecies()) ;
        $prepare->bindValue(":size", $animal->getSize()) ;
        $prepare->bindValue(":race", $animal->getRace()) ;
        $prepare->bindValue(":gender", $animal->getGender()) ;
        $prepare->bindValue(":birthdate", $animal->getBirthdate()) ;
        $prepare->bindValue(":color", $animal->getColor()) ;
        $prepare->bindValue(":description", $animal->getDescription()) ;
        $prepare->bindValue(":location", $animal->getLocation());
        $prepare->execute();
    }
    
    public function getOne($id)
    {
        $query = $this->db->query("SELECT * FROM animals WHERE id =".$id['id']);
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Animals")[0];
    }

    
    public function update($animal, $id)
    {
        $statement = "UPDATE animals SET name = :name, species = :species, size = :size, race = :race, gender = :gender, birthdate = :birthdate, color = :color, description = :description, location = :location WHERE id =".$id." ";

        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":name", $animal->getName());
        $prepare->bindValue(":species", $animal->getSpecies());
        $prepare->bindValue(":size", $animal->getSize());
        $prepare->bindValue(":race", $animal->getRace());
        $prepare->bindValue(":gender", $animal->getGender());
        $prepare->bindValue(":birthdate", $animal->getBirthdate());
        $prepare->bindValue(":color", $animal->getColor());
        $prepare->bindValue(":description", $animal->getDescription());
        $prepare->bindValue(":location", $animal->getLocation());

        $prepare->execute();
    }


    public function delete($id)
    {
        $query = $this->db->query("DELETE FROM animals WHERE id =".$id['id']);
    }

}