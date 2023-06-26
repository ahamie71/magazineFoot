<?php

namespace Foot\Controllers;

 Abstract class AbstractController
{
   public function render()
   {
    require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php');
   } 
}