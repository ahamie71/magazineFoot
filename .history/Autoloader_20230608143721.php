<?php

spl_autoload_register(function ($className) {
   
    $className = str_replace("Foot\\View\\", '', $className);
    $className = str_replace("\\", '/', $className);
    require_once(__DIR__ . "/src/$className.php");
    
});