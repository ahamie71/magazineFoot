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
        $userRepository = new UserRepository;
        // a retirer
        $username= 'Ali';
        $user = new User();
        $user= $userRepository->findUser($username);
        if ($user||password_verify($password,$user->getPassword())){
            
            require('./../src/View/Post/ConnectionForm.php'); ;
            
        }
       
        require('./../src/View/ConnectionForm.php');
           
           
        
    }


    }

