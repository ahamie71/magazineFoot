<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Custom Styling -->
  <link rel="stylesheet" href="public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Article </title>
</head>

<body>
  <!-- Page header -->
  <!-- Page Wrapper -->
  <div class="page-container">
    <!-- Content -->
    <div class="container">
      <!-- Main Content Wrapper -->
      <div class="">
        <div class="main-content single">
          <h1 class="post-title">
            <?= $posts['title'] ?>
          </h1>
          <div class="post-image">
            <img src="<?php echo  $posts['image'] ?>" alt="">
          </div>
          </br>
          <div class="post-content">
            <?= $posts['content'] ?></br>
            <strong> Auteur:
              <?= $posts['username']; ?> </br> publié le
              <?= $posts['created_at'] ?> dans la catgeorie
              <?= $posts['name']; ?>
            </strong>
          </div>
        </div>