<?php
namespace Vendor\Database;

// $pdo = new PDO("mysql:host=localhost:8889,dbname=blog", "root", "root", [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
// ]);

// $query = $pdo->query("SELECT * FROM article");
// foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $value) {
//     # code...
// }

class Database {

    private $dbUser = "root";
    private $dbPass = "";
    private $host = "localhost:3306";
    private $dbName = "ipssi-spa";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUser, $this->dbPass, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    }
    /**
     * Méthode magique appelée à la destruction de la classe
     *
     * @return void
     */
    public function __destruct()
    {
        $this->pdo = null;
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}