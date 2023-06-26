<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    public function render($posts)
    {
        
            $viewPath = dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php';
    
            if (file_exists($viewPath)) {
                ob_start();
                include($viewPath);
                $renderedOutput = ob_get_clean();
    
                return $renderedOutput;
            } else {
                return 'Erreur : La vue DisplayPosts.php n\'existe pas.';
            }
        }
        
        
    
}