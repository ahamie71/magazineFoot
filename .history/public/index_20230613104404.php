<?php
require_once(dirname(__DIR__).'/Autoloader.php');


use Foot\Entity\Post;
use Foot\Entity\Router;
use Foot\Entity\User;
use Foot\Entity\Comment;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\HomeController;


if(isset($_GET['action'])){

    $action= $_GET['action'];

    switch($action){

    case  'Login';
        $controleur= new ConnectionController();
        $controleur->Connect();
        break;
    }
        
}
else{
    $home=  new HomeController();
    $home->Home();
}










