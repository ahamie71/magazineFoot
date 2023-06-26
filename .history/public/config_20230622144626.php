<?php


session_start();

if(isset($_GET['token']) && $_GET['token']!= $_SESSION['token']){

    die ("jeton de secu")
}

if(!isset($_SESSION['token'])){
   
   $_SESSION['token'] = md5(time()*rand(175,658));
   

 }