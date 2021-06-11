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
        include ROOT."/templates/Articles/articlesView.php";
    }

    public function article($id)
    {
        $articles = $this->manager->getOne($id);
        include ROOT."/templates/Articles/articleView.php";
    }

    public function addArticle()
    {
       if (!empty($_POST)) {
           $article = new Articles();
           $article->hydrate($_POST);
           $this->manager->create($article);
           header("Location:index.php?page=blog");
       }
        include ROOT."/templates/Articles/addArticle.php";
    }

    public function updateArticle(/* $data */)
        {
            if (!empty($_POST)) {
                $article = new Articles();
                $article->hydrate($_POST);
                $id = $_GET['id'];
                $this->manager->update($article, $id);
                header("Location:/spa/public/?page=article&id=$id");
            }
            include ROOT."/templates/Articles/addArticle.php";
        }

    public function deleteArticle($id)
    {
        $articles = $this->manager->delete($id);
        header("Location:/spa/public/?page=blog");

    }
}