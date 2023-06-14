<?php                   
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MaClasse1();
$obj2 = new MaClasse2();
?>
