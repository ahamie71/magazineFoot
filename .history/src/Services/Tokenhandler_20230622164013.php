<?php




class Tokenhandler
{
    public function Token()
    {
        if (!isset($_SESSION['token'])) {
            $_SESSION['token'] = md5(time() * rand(175, 658));
        }
    }

    public function verifyToken()
    {
        if(isset($_GET['token']) && $_GET['token']!= $_SESSION['token']){

            die ("jeton de securité périmé");
        }
        
    }

}