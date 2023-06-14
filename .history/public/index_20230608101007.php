<?php

use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;

require_once(dirname(__DIR__).'/Autoloader.php');

routeur= new Routeur;

$routeur->run();



$user= new User();
$comment= new Comment();
$post= new Post();
