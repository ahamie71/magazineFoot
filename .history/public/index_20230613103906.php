<?php
require_once(dirname(__DIR__).'/Autoloader.php');


use Foot\Entity\Post;
use Foot\Entity\Router;
use Foot\Entity\User;
use Foot\Entity\Comment;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\HomeController;



$router = new Router();

if(isset($_GET['action'])){

    $action= $_GET['action'];

    switch($action){

        case'home';
        $router
}


$controleur= new ConnectionController();
$controleur->Connect();







