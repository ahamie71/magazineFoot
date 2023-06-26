
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
            <?= $post->getTitle() ?>
          </h1>
          <div class="post-image">
            <img src="<?= $post->getImage() ?>" alt=""style="border: 8px solid #ddd;
  border-radius: 10px;
  padding: 5px;
  width: 600px;
  height: 300px">
          </div>
          </br>
          <div class="post-content">
            <?= $post->getContent();?></br>
            <strong> Auteur:
              <?= $post->getUsername(); ?> </br> publié le
              <?php $post= new Datetime();
               echo $post->format('Y-m-d ') ?>
            </strong>
          </div>

          <form method="post" action="">
        <div class="form-group">
          <textarea class="form-control"  required="required"name="text" rows="4" placeholder="Ecriver votre commentaire.. "></textarea>
        </div>
        <div class ="form-group">
          <button class="btn btn-primary" type="submit" name="ajout-commenaire">Commenter</button>
        </div>
      </form>
    </div>
        </div>

        