<?php


session_start();

if(isset($_GET['token']) && $_GET['token']!= $_SESSION)

if(!isset($_SESSION['token'])){
   
   $_SESSION['token'] = md5(time()*rand(175,658));
   

 }