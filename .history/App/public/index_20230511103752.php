<?php

use Foot\Entity\User;

require_once(dirname(__DIR__,1).'/Autoloader.php');
echo "test";

$user= new User();

var_dump($user);