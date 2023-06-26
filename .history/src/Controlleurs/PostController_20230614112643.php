<?php

namespace Foot\Controlleurs;
use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 


    $ = new UserRepository;
    $user = new User();
    $user = $userRepository->findUser($username);
    require('./../src/View/Posts/DisplayPosts.php');
     

   

}
}

