<?php
require_once(dirname(__DIR__).'/Autoloader.php');


use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Router;
use Foot\Entity\Comment;
use Foot\Controlleurs\HomeController;
use Foot\Controlleurs\PostController;
use Foot\Controlleurs\ConnectionController;


if(isset($_GET['action'])){

    $action= $_GET['action'];

    switch($action){

    case  'Login';
        $controleur= new ConnectionController();
        $controleur->Connect();
        break;
    case'Display';
       $controller= new PostController();
       $controller->DisplayPosts();
       break;
    case'Logout';
       $controleur= new ConnectionController();
       $controleur->logout();
      break;
    case 'Home';
     $controleur= new HomeController();
     $controleur->Home();
    }
        
}
else{
    $home=  new HomeController();
    $home-> Home();
}









