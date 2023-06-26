<?php

namespace Foot\Entity;

class Comment{

    private $id;

    private $text;

    private int $user_id;
    private int $


    

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
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

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
} 