<?php

namespace Foot\Entity;

class Comment{

    private $id;

    private $text;

    private int user


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
} 