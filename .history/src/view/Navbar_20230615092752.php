<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="./../src/View/css/style.css">
</head>
 
 
<header>
    <div class="logo">
        <h1 class="logo-text"><span>READ</span>BLog</h1>

    </div>
    <ul class="nav">
    
    <?php
            if (!isset($_SESSION['user'])) {
              ?>

            <li><a href="index.php?action=Home" style="color:White;">Home</a></li>
            <li><a href="index.php?action=Register"style="color:White;">S'inscrire</a></li>
            <li><a href="index.php?action=Login" style="color:White;">Se connecter</a></li>
            
            <?php
           }
            else{
                ?>
                 <h1>BIENVENUE <?php echo $_SESSION['user']->getUsername();?></h1>
                 <li><a href="index.php?action=Display" style="color:WHITE;">Articles</a></li>
  
                <li><a href="index.php?action=Logout"style="color:RED;">Deconnection </a></li>


                <?php 
//                 if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') {

//                echo' <li><a href="index.php?action=Admin"style="color:white;">Admin </a></li>'
// ?>
<?php }
?>

            <?php
                
}
            ?>
        

           
       
    </ul>  
</header>










