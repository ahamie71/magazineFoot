<?php

use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;

use Foot\View\ConnectionForm;


require_once(dirname(__DIR__).'/Autoloader.php');

$user= new User();
$comment= new Comment();
$post= new Post();
$form= new ConnectionForm();
$form->showLoginForm();
$error= new co
$error->showErrorMessage();