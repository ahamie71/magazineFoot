<?php
phpinfo(__FILE__, __LINE__);
require_once(dirname(__DIR__) . '/Autoloader.php');
session_start();
use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Router;
use Foot\Entity\Comment;
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

    }

} else {
    $home = new HomeController();
    $home->Home();
}

