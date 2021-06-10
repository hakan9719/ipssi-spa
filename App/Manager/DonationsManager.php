<?php

namespace App\Manager;

use Vendor\Database\Database;

class DonationsManager {

    protected $db;

    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getPdo();
    }

    public function create ($donation)
    {
        $statement = "INSERT INTO donations (lastName, firstName, message, donation) 
                        VALUES (:lastName, :firstName, :message, :donation)";
        
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":lastName", $donation->getLastName());
        $prepare->bindValue(":firstName", $donation->getFirstName());
        $prepare->bindValue(":message", $donation->getMessage());
        $prepare->bindValue(":donation", $donation->getDonation());
        $prepare->execute();
    }
    
    public function getList()
    {
        $query = $this->db->query("SELECT * FROM donations");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\Donations");
    }
}