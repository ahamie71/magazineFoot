<?php

namespace Foot\Entity;

use DateTime;
use Foot\Entity\User;

class Post{
   
    private $id;
    private $title;
    private $content;
    private $image;
    private $createdAt;
    private int $userId ;
   
    public function __construct($userId) 
    {
       $this 
    }
    
    public function getId():int
    {
        return $this->id;
    }
    
    public function setTitle($title)
    {

        $this->title = $title;

        return $this;
    }

    public function getTitle():string{
        
        return $this->title;
    }

    public function setContent($content){

        $this->content = $content;

        return $this;
    }

    public function getContent():string{

        return $this->content;

    }

    public function setCreatedAt($createdAt){

        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedAt(): DateTime{

        return $this->createdAt;
    }

    public function setImage($image){

        $this->image = $image;

        return $this;
    }

    public function getImage():string{

        return $this->image;
    }



    /**
     * Get the value of userName
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of userName
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of userId
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
