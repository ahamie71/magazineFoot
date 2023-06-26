<?php


session_start();

if(isset($_))

if(!isset($_SESSION['token'])){
   
   $_SESSION['token'] = md5(time()*rand(175,658));
   

 }