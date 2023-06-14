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
        }
         else {
             $error= 'erreur1';
         }
        $user = new User('Ali');
        $userRepository = new UserRepository;
        // a retirer
        $username= 'Ali';
        $password='Ahmadf1';
        $user= $userRepository->findUser($username);
        if (!$user||password_verify($password,$user->getPassword())) {
            
            $error= 'erreur2';
            
        }
        require('./../ConnectionForm.php');
           
           
        
    }


    }

