<?php

namespace Foot\Entity;

use Foot\Entity\User;
class Comment{

    private $id;
    private $text;
    private int $id_user;
    private int $id_post;


    

    public function getId(): int  {
        
        return $this->id;

    }

    public function getText(): string {

        return $this->text;

    }

    public function setText($text) {

        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
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
     * Get the value of id_post
     */
    public function getIdPost(): int
    {
        return $this->id_post;
    }

    /**
     * Set the value of id_post
     */
    public function setIdPost(int $id_post): self
    {
        $this->id_post = $id_post;
        return $this;
    }
} 