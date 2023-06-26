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
            $controller->Logout();
            break;
        case 'Home';
            $controller = new HomeController();
            $controller->Home();
            break;
        case 'Register';
             $controller = new RegistrationController();
             $controller->Register();
            break;
        case'DisplayOnePost';
        $controller= new PostController();
        $controller->DisplayOnePost();
            break ;
        case'AddPost';
        $controller= new PostController();
        $controller->CreatePost();
             break;
        case'Delete';
        $controller= new PostController();
        $controller->DeletePost();
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

