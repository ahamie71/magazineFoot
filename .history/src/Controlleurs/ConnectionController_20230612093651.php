<?Php

use Foot\View\ConnectionForm;
use Foot\Entity\User;
use Foot\Model\UserRepository;


class ConnectionController
{
    public function Connect()
    {
        // on verifie si il a bien rentrer les informations et a bien rempli les informations
        if(isset($_POST['username']) && $_POST['password']){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $userRepository = new UserRepository;
        // a retirer
        
        $user= $userRepository->findUser($username);

        if ($user||password_verify($password,$user->getPassword())) {
            
            
            
        }
        else
        require('./../ConnectionForm.php');
           
           
        
    }


}
}

