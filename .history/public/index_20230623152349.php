<?php
require_once(dirname(__DIR__) . '/Autoloader.php');
define("ROOT_PATH", __DIR__ . '/../src/');


use Foot\Controllers\HomeController;
use Foot\Controllers\PostController;
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
        case 'DisplayOnePost';
            $controller = new PostController();
            $controller->DisplayOnePost();
            break;
        case 'AddPost';
            $controller = new PostController();
            $controller->CreatePost();
            break;
        case 'Delete';
            $controller = new PostController();
            $controller->DeletePost();
            break;

        case 'edit';
            $controller = new PostController();
            $controller->UpdatePost();
            break;
        case 'Comment';
            $controller = new CommentController();
            $controller->addComment();
            break;
        case 'DisplayCom';
            $controller = new CommentController();
            $controller->getComment();
            break;
        case 'DeleteComment';
            $controller = new CommentController();
            $controller->RemoveComments();
            break;
    }

} else {
    $home = new HomeController();
    $home->Home();
}
;