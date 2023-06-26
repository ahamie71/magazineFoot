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
        if ($posts) {
            header('location:index.php?action=Display');
            exit();


        }
    }

}