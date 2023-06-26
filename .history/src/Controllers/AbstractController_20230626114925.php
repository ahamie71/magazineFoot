<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    public function render($posts)
    {
        $viewPaths = array(
            (dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php'),
            (dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php')
            
        );
    
        foreach ($viewPaths as $viewPath) {
            if (file_exists($viewPath)) {
                ob_start();
                include($viewPath);
                $renderedOutput = ob_get_clean();
    
                echo $renderedOutput;
            } else {
                echo 'Erreur : La vue ' . $viewPath . ' n\'existe pas.';
            }
        }
    }
    
}