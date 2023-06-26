<?php
require_once(dirname(__DIR__) . '/Autoloader.php');
define("ROOT_PATH", __DIR__ .'/../src/');


use Foot\Controlleurs\HomeController;
use Foot\Controlleurs\PostController;
use Foot\Controlleurs\CommentController;
use Foot\Controlleurs\ConnectionController;
use Foot\Controlleurs\RegistrationController;


if (isset($_GET['action'])) {

    $action = $_GET['action'];

    switch ($action) {

        case 'Login';
            $controller = new ConnectionController();
            $controller->Connect();
            break;
        case 'Display';
            $controller = new PostController();
            $controller->DisplayPosts();
            break;
        case 'Logout';
            $controller = new ConnectionController();
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
        case'AddPost';
             $controleur= new PostController();
             $controleur->CreatePost();
             break;
        case'Delete';
             $controleur= new PostController();
             $controleur->DeletePost();
             break;
       
         case'edit';
             $controleur= new PostController();
             $controleur->UpdatePost();
             break;
        case'Commenter';
             $controleur= new CommentController();
             $controleur->addComment();
             break;
         case'AffichCom';
             $controleur= new CommentController();
             $controleur->getComment();
             break;
         case'DeleteComment';
             $controleur= new CommentController();
             $controleur->MoveComments();
             break;
    }

} 
else {
    $home = new HomeController();
    $home->Home();
};

