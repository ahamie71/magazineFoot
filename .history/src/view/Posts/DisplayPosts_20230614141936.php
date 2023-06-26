
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mini | Blog</title>
</head>

<body>

<h1 class="posts-title">Articles</h1>
<div class="container-fluid">
                <div class="button-group">
            <a href="" class="btn btn-primary">Ajouter un article</a>
                    
                </div>
                <section class="articles">
<?php foreach($posts as $post):?>
    <div class ="card-group">
     <div class="article">
      <div class="left">
        <img src="<?php $post= $post->getImage();
        echo $post?>" alt="">
      </div>
      <div class="right">
      <?php endforeach; ?>
</body>
</html>