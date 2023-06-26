<?php

namespace Foot\Controlleurs;


session_start();

 if(!$_SESSION['user']){
      header('location:index.php?action=Login');
     }
use Foot\Entity\Post;
use Foot\Model\PostRepository;

class PostController
{

  public function DisplayPosts()
  {

    // if(!$_SESSION['user']){
    //   header('location:index.php?action=Login');
    //  }
    $postRepository = new PostRepository;
    $posts = $postRepository->displayPosts();


    require_once(dirname(__FILE__, 2) . '/View/Posts/DisplayPosts.php');

  }

  public function DisplayOnePost()
  {


    // if(!$_SESSION['user']){
    //   header('location:index.php?action=Login');
    //  }

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
  
    //  if(!$_SESSION['user']){
    //   header('location:index.php?action=Login');
    //  }
    $error = '';
    if (!isset($_POST['content']) && !isset($_POST['title']) && !isset($_FILES['image'])) {
  
        $error;
    } 
    
    else {
      $imgPath = $this->uploadPicture($_FILES['image']);
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

  function uploadPicture($image)
{

  $target_dir = "./../src/View/image";
  $target_file = $target_dir . basename($image["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  
    $check = getimagesize($image["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo "1";
      $uploadOk = 0;
    }
  
  // Check file size
  if ($image["size"] > 5000000) {
    echo "2";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  ) {
    echo "3";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
      return $target_file;
    } else {
      return false;
    }
  }
}


 public function DeletePost()
{

  $id = $_GET['id'];
  
  $po
  if($_SESSION['user']->getID() == $posts->getUserId()){
  $postRepo= new PostRepository();
  $posts= $postRepo->getPostById($_GET['id']);

  }
  

}

}