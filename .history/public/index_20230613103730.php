<?php
require_once(dirname(__DIR__).'/Autoloader.php');


use Foot\Entity\Post;
use Foot\Entity\Router;
use Foot\Entity\User;
use Foot\Entity\Comment;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\HomeController;



$action = new Router();




$controleur= new ConnectionController();
$controleur->Connect();







