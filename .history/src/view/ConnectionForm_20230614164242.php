<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="public/js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    include(ROOT_PATH . 'View/Navbar.php');
    ?>
<form action="index.php?action=Login" method="POST">
    <section class="vh-100" style="background-color:white;">
      <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-80">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <h3 class="mb-5">Sign in</h3>
                <div class="form-outline mb-4">
                  <input type="name" required="required" id="name" class="form-control form-control-lg" name="prenom"
                    placeholder="enter your name" />
                  <label class="form-label" for="typeEmailX-2"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"
                    placeholder="enter your password" />
                  <label class="form-label" for="typePasswordX-2"></label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="valider">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
</body>

</html>











<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <?php
    require('Navbar.php');
    ?>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container">
        <?php echo $error; ?>
        <form method="post" action="index.php?action=Login">
            <label for="username">Nom d\'utilisateur:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>

</html>