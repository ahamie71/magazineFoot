<?php

namespace Foot\Controlleurs;

session_start();
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

  public function DisplayOnePost()
  {

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {

      $id = $_GET['id'];
      $post = new Post();
      $postRepository = new PostRepository;
      $post = $postRepository->getPostById($id);

      require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayOnePost.php');

    }

  }

  public function CreatePost()
  {
    $error = '';
    if (!isset($_POST['content']) && !isset($_POST['title']) && !isset($_FILES['image'])) {
      $error= "erreur";
        
    } else {
      $imgPath = $this->uploadImage($_FILES['image']);

      if (is_string($imgPath)) {
        // Gérer l'erreur d'upload de l'image
        $error = $imgPath;
        require_once(dirname(__FILE__, 2) . '/View/Posts/AddPost.php');
        return;
      }
      $content = $_POST['content'];
      $title = $_POST['title'];
      $user_id = $_SESSION['user']->getId();
      $createdAt = date('Y-m-d H:i:s');
      $image = $imgPath;
      $post = new Post();

      $postRepository = new PostRepository;
      $post = $postRepository->addPost($user_id, $title, $content, $image, $createdAt);
      header('Location:index.php?action=Display');
      exit();
    }

    require_once(dirname(__FILE__, 2) . '/View/Posts/AddPost.php');

  }

  




}
;