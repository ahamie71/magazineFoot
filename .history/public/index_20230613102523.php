<?php
require_once(dirname(__DIR__).'/Autoloader.php');


use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\HomeController;

$home= new HomeController();
$home->Home();
$controleur= new ConnectionController();
$controleur->Connect();







