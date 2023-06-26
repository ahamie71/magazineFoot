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
        header('public/index.php?action=Display');
          
    }

}