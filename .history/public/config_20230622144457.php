<?php


session_
if(!isset($_SESSION['token'])){
   
   $_SESSION['token'] = md5(time()*rand(175,658));
   

 }