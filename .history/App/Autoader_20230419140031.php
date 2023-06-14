<?php                   

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$user  = new User();
$Comment = new Comment();

?>