<?php

namespace Foot\Controlleurs;

use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 
    $postRepository = new PostRepository;
    $post = new Post();
    $post= $postRepository->displayPosts($post);
    require('./../src/View/Posts/DisplayPosts.php');
}
}

