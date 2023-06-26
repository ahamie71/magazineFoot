<?php


require_once(dirname(__DIR__) . '/Autoloader.php');

define("ROOT_PATH", __DIR__ .'/../src/');


use Foot\Controlleurs\HomeController;
use Foot\Controlleurs\PostController;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\RegistrationController;


if (isset($_GET['action'])) {

    $action = $_GET['action'];

    switch ($action) {

        case 'Login';
            $controleur = new ConnectionController();
            $controleur->Connect();
            break;
        case 'Display';
            $controller = new PostController();
            $controller->DisplayPosts();
            break;
        case 'Logout';
            $controleur = new ConnectionController();
            $controleur->Logout();
            break;
        case 'Home';
            $controleur = new HomeController();
            $controleur->Home();
            break;
        case 'Register';
            $controleur = new RegistrationController();
            $controleur->Register();
            break;
        case'DisplayOnePost';
            $controleur= new PostController();
            $controleur->DisplayOnePost();
            break ;
        case'CreatePost';
             $controleur= new PostController();
             $controleur->createArticle();
             break;
             case'CreatePost';
             $controleur= new PostController();
             $controleur->createArticle();
             break;
           

    }

} 
else {
    $home = new HomeController();
    $home->Home();
};

