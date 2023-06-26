<?php

namespace Foot\Controlleurs;

use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 
    $postRepository = new PostRepository;
    $posts = new Post();
    $posts= $postRepository->displayPosts();
    require('./../src/View/Posts/DisplayPosts.php');
}
}

