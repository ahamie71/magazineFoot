<?php

namespace Foot\Controlleurs;

class PostController{

   public function  DisplayPosts(){ 


    $post= NewPost();
    require('./../src/View/Posts/DisplayPosts.php');
     

   

}
}

