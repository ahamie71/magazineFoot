<?php

use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;


require_once(dirname(__DIR__).'/Autoloader.php');

require_once(dirname(__DIR__),.'ConnectionController.php');
$controleur= new ConnectionController();
$controleur ->Connect();




