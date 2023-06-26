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
   
    public function addPost($user_id,$title, $content,$image,$createdAt)
    {
        $bdd = new Database();
        $query = $bdd->getPDO()->prepare("INSERT INTO Post(user_id,title,content,image,created_at)VALUES(?,?,?,?,?)");
        $query->execute([
            $_SESSION['user']->getId(),
            $title,
            $content,
            $image,
            $createdAt
           

    
        ]); 


    }
      

    public function movePost($id)
    {
        $bdd = new Database();
        $sql = "DELETE FROM Post WHERE id= $id";
        $delet = $bdd->getPDO()->prepare($sql);
        $delet->execute();

    }


    public function editPost($content, $id , $title )

    {
        $bdd = new Database();
        $update = $bdd->getPDO()->prepare("UPDATE  Post SET content=:content , title=:title WHERE id = $id");
        $update->execute(
            array(
                ':content' => $content,
                ':title' => $title
            )
        );

    }
      public function createComment($id_post, $user_id,$text){
  
            $bdd = new Database();
            $query = $bdd->getPDO()->prepare("INSERT INTO Comments(id_post,id_user,text)VALUES(?,?,?,)");
            $query->execute([
                $id_post,
                $_SESSION['user']->getId(),
                $text,
                
                
               
        
            ]); 
    }


    function afficheComment($id_post):array{
    
        $bdd = new Database();
        $req ="SELECT u.username,c.id_user,c.id,c.text,c.id_post FROM Comments c
        LEFT JOIN User u ON c.id_user = u.id
        LEFT JOIN Post p ON c.id_post = p.id  WHERE c.id_post = $id_post";
        $stmt = $bdd->getPDO()->prepare($req);
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Foot\Entity\Comments');
        $stmt->execute();
        $commentaires = $stmt->fetchAll();
        var_dump($commentaires);
        return $commentaires;
    }

    var_dump($commentaires);
}