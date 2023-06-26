
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
    require('Navbar.php');
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
                  <input type="name" required="required" id="name" class="form-control form-control-lg" name="username"
                    placeholder="enter your Username" />
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









