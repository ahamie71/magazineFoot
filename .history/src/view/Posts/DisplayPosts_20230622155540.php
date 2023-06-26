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
        <link rel="stylesheet" href="./../View/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Mini | Blog</title>
    </head>

    <body>


        <?php
        include(ROOT_PATH . 'View/Navbar.php');
        ?>
        <h1 class="posts-title">Articles</h1>
        <div class="container-fluid">
            <div class="button-group">
                <a href="index.php?action=AddPost" class="btn btn-primary">Ajouter un article</a>

            </div>
            <section class="articles">
                <?php foreach ($posts as $post): ?>
                    <div class="card-group">
                        <div class="article">
                            <div class="left">
                                <img src="<?= $post->getImage(); ?>" alt=""style="border: 8px solid #ddd;
  border-radius: 10px;
  padding: 5px;
  width: 600px;
  height: 300px;
">
                            </div>
                            <div class="right">
                                <h1>
                                    <?= $post->getTitle() ?>.....
                                </h1>
                                <p class="auteur"> Auteur:
                                    <?= $post->getUsername(); ?>
                                </p>
                            <a href="index.php?action=DisplayOnePost&id=<?= $post->getId(); ?>"
                                    class="btn btn-primary">Lire la suite</a>
                                <?php
                                  if (isset($_SESSION['user']) && ($_SESSION['user']->getId()) == $post->getUserId()) {
                                    echo '<a href="index.php?action=Delete&id='. $post->getId() . ' "class="btn btn-danger">Delete</a>';
                                    echo '<a href="index.php?action=edit&id=' . $post->getId() . '"class="btn btn-success">Edit</a>';
                                  }
                                   
                                ?>



                            </div>


                        </div>
                    </div>
                <?php endforeach; ?>














                <style>
                    .articles {
                        margin-top: 30px;
                    }

                    .articles .article {
                        display: flex;
                        flex-wrap: wrap;
                        margin-bottom: 30px;
                    }

                    .articles .article .left img {
                        height: 300px;
                        width: 500px;
                    }

                    .articles .article .right {
                        margin-left: 40px;
                        max-width: 50%;
                    }

                    .articles .article .right p.date {
                        color: #7f7e7e;
                    }

                    .articles .article .right p.description {
                        color: #2d2d2d;
                    }

                    body {
                        margin: 0px;
                        font-family: 'Noto Sans JP', sans-serif;
                        background-color: whitesmoke;
                        ;
                    }
                </style>



    </body>

    </html>