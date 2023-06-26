<?php
namespace Foot\Services;

use Foot\Services\Tokenhandler;


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
        if( $token === $_SESSION['token']){

            return true;
        
         } 
         return false;
    }

}