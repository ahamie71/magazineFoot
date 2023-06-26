<?php
namespace Foot\Model;


use Foot\Entity\Database;
use PDO;

class PostRepository
{

      public function displayPost(){

        $bdd = new Database();
        $req ="SELECT Pos.user_id, Post.id , Post.image, Post.created_at,Post.title,PO.content,users.prenom,categories.name FROM posts
        INNER JOIN users ON posts.user_id = users.id";
         $stmt = $bdd->getPDO()->prepare($req);
         $stmt->execute();
         $articles=$stmt->fetchAll();
         return $articles;


      } 




}