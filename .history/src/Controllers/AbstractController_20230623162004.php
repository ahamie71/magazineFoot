<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    public function render($posts , $pozt)
    {
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php'. $posts );
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php'. $post);
        
    }
}