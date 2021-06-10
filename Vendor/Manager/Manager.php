<?php
namespace Vendor\Manager;

use Vendor\Database\Database;
use Vendor\Interfaces\GlobalInterface;
use Vendor\Interfaces\ManagerInterface;

abstract class Manager implements ManagerInterface, GlobalInterface{

    protected $db;
    protected $table;


    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getPdo();
    }

    // public abstract function create($article);

    public function getList()
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    public function getTinyList()
    {
        $query = $this->db->query("SELECT * FROM $this->table LIMIT 3");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }


    // public abstract function getOne();

    // public abstract function update();

    // public abstract function delete();
}