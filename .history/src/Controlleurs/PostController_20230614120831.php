<?php

namespace Foot\Controlleurs;

use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 
    $postRepository = new PostRepository;
    $posts= $postRepository->displayPosts();
    var_dump(po)
    include('./../src/View/Posts/DisplayPosts.php');
}
}

