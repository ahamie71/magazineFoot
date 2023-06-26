<?php

namespace Foot\Controlleurs;
use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 


    $postRepository = new PostRepository;
    $user = new Post();
    $user = $userRepository->findUser($username);
    require('./../src/View/Posts/DisplayPosts.php');
     

   

}
}

