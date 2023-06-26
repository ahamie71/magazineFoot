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


    } else {
      $imgPath = uploadImage($_FILES['image']);
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

  function uploadImage($image)
  {
    $target_dir = "View/image"; // Chemin vers le dossier de destination des images
    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Vérifier si le fichier est une image réelle ou une fausse image
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
      return 'Le fichier n\'est pas une image valide.';
    }

    // Vérifier la taille du fichier
    if ($image["size"] > 5000000) {
      return 'La taille de l\'image est trop grande. Veuillez choisir une image plus petite.';
    }

    // Autoriser uniquement certains formats d'image
    $allowedExtensions = ["jpg", "jpeg", "png"];
    if (!in_array($imageFileType, $allowedExtensions)) {
      return 'Seules les images de type JPG, JPEG et PNG sont autorisées.';
    }

    // Vérifier si le fichier a été téléchargé avec succès
    if (!move_uploaded_file($image["tmp_name"], $target_file)) {
      return 'Une erreur s\'est produite lors du téléchargement de l\'image. Veuillez réessayer.';
    }

    // Retourner le chemin relatif de l'image téléchargée
    return $target_file;
  }




}
;