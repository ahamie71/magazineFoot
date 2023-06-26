<?php
namespace Foot\Model;


use Foot\Entity\Database;
use PDO;

class PostRepository
{

      public function displayPost(){

       
        $req ="SELECT posts.user_id, posts.id , posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
        LEFT JOIN users ON posts.user_id = users.id
        LEFT JOIN categories ON posts.category_id = categories.id
        WHERE created_at BETWEEN'2022-03-21 08:43:50' AND '2023-03-21 08:43:50'";
         $stmt = $db->prepare($req);
        //  $stmt->bindParam(':one_year_ago', $oneYearAgo);
        //  $stmt->bindParam(':current_date', $currentDate);
         $stmt->execute();
         $articles=$stmt->fetchAll();
         return $articles;


      } 




}