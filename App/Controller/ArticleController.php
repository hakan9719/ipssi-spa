<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Manager\ArticleManager;

class ArticleController {

    public function __construct()
    {
        $this->manager = new ArticleManager;
    }

    public function articles()
    {
        $articles = $this->manager->getList();
        include ROOT."/templates/articlesView.php";
    }

    public function article($id)
    {
        $articles = $this->manager->getOne($id);
        include ROOT."/templates/articleView.php";
    }

    public function addArticle()
    {
       if (!empty($_POST)) {
           $article = new Articles();
           $article->hydrate($_POST);
           $this->manager->create($article);
           header("Location:index.php?page=ecrireArticle");
       }
        include ROOT."/templates/addArticle.php";
    }

    public function deleteArticle($id)
    {
        $articles = $this->manager->delete($id);
    }
}