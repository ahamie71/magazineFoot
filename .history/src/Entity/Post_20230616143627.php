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
    private string $userName
    public function __construct() 
    {
        $this->use = new User(); // Initialize the $user property with a User object
    }
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    public function getUser():User
    {
          return $this->user;
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


}

