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
    
    public function getPostById(){

            
        $bdd = new Database();
    $req ="SELECT posts.user_id, posts.id, posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
    LEFT JOIN users ON posts.user_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id 
    WHERE posts.id =  $id";
    $search = $Connect->prepare($req);
    $search->execute();
    $post = $search->fetch();
    return $post;


    }
   




}