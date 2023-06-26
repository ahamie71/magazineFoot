<?php
namespace Foot\Model;
use Foot\Entity\Database;

use PDO;



class PostRepository
{

    public function displayPosts()
    {

        $bdd = new Database();
        $req = "SELECT Post.user_id, Post.id , Post.image, Post.created_at,Post.title,Post.content,User.username FROM Post
        LEFT JOIN User ON Post.user_id = user.id";
        $stmt = $bdd->getPDO()->prepare($req);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Foot\Entity\Post');
        $stmt->execute();
        $posts = $stmt->fetch();
        return $posts;
        

    }
    
   




}