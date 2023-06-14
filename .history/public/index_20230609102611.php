<?php

use Foot\Entity\Post;
use Foot\Entity\User;
use Foot\Entity\Comment;
use ConnectionController;

require_once(dirname(__DIR__).'/Autoloader.php');


$controleur= new ConnectionController();
$controleur ->Connect();




