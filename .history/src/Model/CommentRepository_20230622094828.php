<?php


namespace Foot\Model;
use PDO;


use Foot\Entity\Database;

Class CommentRepository
{


    function getComments($id_post):array{
    
        $bdd = new Database();
        $req ="SELECT u.username,c.id_user,c.id,c.text,c.id_post FROM Comments c
        LEFT JOIN User u ON c.id_user = u.id
        LEFT JOIN Post p ON c.id_post = p.id  WHERE c.id_post = $id_post";
        $stmt = $bdd->getPDO()->prepare($req);
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Foot\Entity\Comment');
        $stmt->execute();
        $comments = $stmt->fetchAll();
        return $comments;
    }


    public function createComment($id_post, $user_id,$text){
  
        $bdd = new Database();
        $query = $bdd->getPDO()->prepare("INSERT INTO Comments(id_post,id_user,text)VALUES(?,?,?)");
        $query->execute([
            $id_post,
            $_SESSION['user']->getId(),
            $text
            
            
           
    
        ]); 
}



public function DeleteComments($id)

{
    $bdd = new Database();
    $sql = "DELETE FROM Comments WHERE id= $id";
    $stmt= $bdd->getPDO()->prepare($sql);
    $stmt->execute();
  

}


}