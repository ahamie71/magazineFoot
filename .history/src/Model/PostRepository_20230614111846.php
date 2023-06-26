<?php
namespace Foot\Model;


use Foot\Entity\Database;
use PDO;

class PostRepository
{

      public function displayPost(){

        $bdd = new Database();
        $req ="SELECT Pos.user_id, Post.id , Post.image, Post.created_at,Post.title,Post.content,User.username FROM posts
        INNER JOIN users ON Post.user_id = user.id";
         $stmt = $bdd->getPDO()->prepare($req);
         $stmt->execute();
         $articles=$stmt->fetchAll();
         return $articles;


      } 




}