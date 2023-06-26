<?php


session_start();

if(isset($_GET['token']) && $_GET['token']!= $_SESSION['token']){

    die ("jeton de securité périmé");
}

