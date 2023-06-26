<?php


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

}