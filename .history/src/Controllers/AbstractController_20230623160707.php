<?php

namespace Foot\Controllers;

abstract class AbstractController
{
    public function render($postspost)
    {
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php'.$posts);
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php'.$post);
        
    }
}