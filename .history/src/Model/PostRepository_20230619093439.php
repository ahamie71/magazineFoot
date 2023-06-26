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
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Foot\Entity\Post');
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
        

    }
    
    public function getPostById($id){

            
     $bdd = new Database();
    $req ="SELECT Post.user_id, Post.id , Post.image, Post.created_at,Post.title,Post.content,User.username FROM Post
    LEFT JOIN User ON Post.user_id = user.id
    WHERE Post.id =  $id";
    $stmt= $bdd->getPDO()->prepare($req);
    $stmt->setFetchMode(PDO::FETCH_CLASS,'Foot\Entity\Post');
    $stmt->execute();
    $post = $stmt->fetch();
    return $post;


    }
   
    public function addPost()
    {
        $bdd = new Database();
        $query = $bdd->prepare("INSERT INTO Post(user_id,title,content,image,created_at)VALUES(?,?,?,?,?,)");
        $query->execute([
            $_SESSION['user']['id'],
            $title,
            $content,
            $image,
            $created_at,
            $category_id
            
           
    
        ]); 


    }
      



}