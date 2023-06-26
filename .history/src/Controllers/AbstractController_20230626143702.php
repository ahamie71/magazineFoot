<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    function render($view, $data = []) {
        $viewPath = 'chemin/vers/vues/' . $view . '.php';
    
        if (file_exists($viewPath)) {
            extract($data);
            include $viewPath;
        } else {
            // Gérer le cas où le fichier de vue n'existe pas
            // Vous pouvez afficher un message d'erreur ou effectuer d'autres actions
        }
    }
    

}