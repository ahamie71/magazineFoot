<?php


class Tokenhandler{


    public function createToken(){
   
        if(!isset($_SESSION['token'])){
   
            $_SESSION['token'] = md5(time()*rand(175,658));
  
          }

        
    }


}