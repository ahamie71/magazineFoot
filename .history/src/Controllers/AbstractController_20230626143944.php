<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    public function render($post)
    {
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php');
        
      
    }

}