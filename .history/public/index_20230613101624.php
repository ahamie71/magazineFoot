<?php


use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;
use Foot\


require_once(dirname(__DIR__).'/Autoloader.php');

$controleur= new ConnectionController();
$controleur->Connect();
require_once(dirname(__DIR__,1).'/src/Controlleurs/HomeController.php');
$home= new HomeController();
$home->Home();






