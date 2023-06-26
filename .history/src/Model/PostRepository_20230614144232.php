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
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
        

    }
    
    public function getPostById($id){

            
        $bdd = new Database();
    $req ="
    WHERE posts.id =  $id";
    $search = $bdd->getprepare($req);
    $search->execute();
    $post = $search->fetch();
    return $post;


    }
   




}