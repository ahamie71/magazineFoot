<?php

namespace Foot\Controlleurs;

use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController
{

    public function DisplayPosts()
    {
        $postRepository = new PostRepository;
        $posts = $postRepository->displayPosts();
       
       
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php');
          
    }

    public function DisplayOnePost(){

      if(isset($_GET['id'])&& is_numeric($_GET['id'])){

        $id= $_GET['id'];
        $post= new Post();
        $postRepository = new PostRepository;
        $post = $postRepository->getPostById($id);
       
        require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');
        
      }

    }


    public function CreatePos()){


    }

}
