<?php
namespace Foot\Services;



class Tokenhandler
{
    public function generateToken()
    {
        if (!isset($_SESSION['token'])) {
            $_SESSION['token'] = md5(time() * rand(175, 658));
        }
    }

    public function verifyToken($token)
    {
        if( $_GET['token']!= $_SESSION['token']){

            die ("jeton de securité périmé");
        }
        
    }

}