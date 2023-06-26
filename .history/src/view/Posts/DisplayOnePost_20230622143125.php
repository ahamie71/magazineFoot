<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Custom Styling -->
  <link rel="stylesheet" href="./../View/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Article </title>
</head>


<body>
  <?php

  include(ROOT_PATH . 'View/Navbar.php');

  ?>
  <!-- Page header -->
  <!-- Page Wrapper -->
  <div class="page-container">
    <!-- Content -->
    <div class="container">
      <!-- Main Content Wrapper -->
      <div class="">
        <div class="main-content single">
          <h1 class="post-title">
           
            <?= $post->getTitle();?>
            
          </h1>
          <div class="post-image">
            <img src="<?= $post->getImage(); ?>" alt="" style="border: 8px solid #ddd;
  border-radius: 10px;
  padding: 5px;
  width: 600px;
  height: 300px">
          </div>
          </br>
          <div class="post-content">
            <?= $post->getContent(); ?></br>
            <strong> Auteur:
              <?= $post->getUsername(); ?> </br> publié le

          </div>
        </div>

        <form method="post" action="index.php?action=Commenter&id=<?= $post->getId(); ?>">
          <div class="form-group">
            <textarea class="form-control" required="required" name="text" rows="4"
              placeholder="Ecriver votre commentaire.. "></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="ajout-commenaire">Commenter</button>
          </div>
        </form>
      </div>


      <div
        style="background:white; box-shadow: 0 5px 15px rgba(0,0,0.15); padding:5px 10px; border-radius:10px;margin-top:20px;">
        <h1>Les Commentaires</h1>
        <?php foreach ($comments as $comment) {
          ?>
          <div style="background: #eee; margin-top:20px;padding:5px 10px;border-radius:10px">
            <div style="font-weight:bold">
              <?= "De " . htmlspecialchars($comment->getUsername()) . "" ?>
            </div>
            <?= htmlspecialchars($comment->getText()); ?>
        </br>

            <?php
            if (isset($_SESSION['user']) && ($_SESSION['user']->getId()) == $comment->getUserId()) ?>W
              echo '<a href="index.php?action=DeleteComment&id=' . $comment->getId() . '"class="btn btn-danger">Delete</a>';
              ?>

            <?php } ?>
            <div style="text-align:right;font-size:12px;color:#665">

            </div>
          </div>
          <?ph
        }
        ?>
      </div>
    </div>