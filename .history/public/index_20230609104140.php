<?php

use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;


require_once(dirname(__DIR__).'/Autoloader.php');

require_once(dirname(__DIR__,1).'/src/ControlleursConnectionController.php');
$controleur= new ConnectionController();
$controleur ->Connect();




