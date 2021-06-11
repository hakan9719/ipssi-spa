<?php

namespace App\Entity;

class Articles {

    private $id;
    private $title;
    private $content;
    private $description;


    public function __construct()
    {
        $this->setDescription( substr( $this->getContent(), 0, 500 )."...");
    }

    public function hydrate (array $article) {
        foreach ($article as $key => $value) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function __isset($nomAttribut)
    {
        echo "Vous n'avez pas accès à <strong>$nomAttribut</strong>";
    }
    public function __get($nomAttribut)
    {
        echo "La propriété <strong>$nomAttribut</strong> n'existe pas";
    }
    public function __call($nom, $param = [])
    {
        echo $nom . "=> nom de la méthode";
    }



    public function getId() {
        return $this->id;
    }


    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }
}