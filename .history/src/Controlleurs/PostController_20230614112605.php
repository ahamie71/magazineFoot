<?php

namespace Foot\Controlleurs;
use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController{

   public function  DisplayPosts(){ 


    $post= New Post();
    $post= new PostRepository();
    
    require('./../src/View/Posts/DisplayPosts.php');
     

   

}
}

