<?php
namespace Foot\Entity;


class Post{
    private $id;
    private $title;
    private $content;
    private $image;
    private $createdAt;

    public function getId():int{

        return $this->id;
    }
    
    public function setTitle($title){

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

    public function getCreatedAt(): datetime{

        return $this->createdAt;
    }
}
