
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
 
 
<header>
  
<div class="logo">
        <h1 class="logo-text"><span>READ</span>BLog</h1>

    </div>
<?php

            if (!isset($_SESSION['user'])) {
              ?>
    <ul class="nav">
            <li><a href="index.php?action=Home" style="color:black;">Home</a></li>
            <li><a href="index.php?action=Register" style="color:black;">S'inscrire</a></li>
            <li><a href="index.php?action=Login" style="color:black;">Se connecter</a></li>   
            
             
            <?php
           }
            else{
                ?>
                 <h1 style= "color;red"></h1></h1>BIENVENUE <?php echo $_SESSION['user']->getUsername();?></h1>
                 <li><a href="index.php?action=DisplayPosts" style="color:black;">Articles</a></li>
  
                <li><a href="index.php?action=Logout"style="color:black;">Deconnection </a></li>



<?php }
?>




    </ul>  
</header>