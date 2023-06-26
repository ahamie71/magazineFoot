<?php
namespace Foot\Model;


use Foot\Entity\Database;
use PDO;

class PostRepository
{

    public function displayPost()
    {

        $bdd = new Database();
        $req = "SELECT Post.user_id, Post.id , Post.image, Post.created_at,Post.title,Post.content,User.username FROM Post
        LEFT JOIN User ON Post.user_id = user.id";
        $stmt = $bdd->getPDO()->prepare($req);
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;


    }
    var_dump($posts);




}