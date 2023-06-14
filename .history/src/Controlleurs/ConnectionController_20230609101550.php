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
             echo'hello';
         }
        $user = new User();
        $userRepository = new UserRepository;
        
        $user= $userRepository->findUser($username);
        if ($user && password_verify($password,$user->getPassword())) {
            // on doit le rediriger vers une vue 
        }
        else {  
            $form = new ConnectionForm();
            $form = $form->showErrorMessage("Identifiants invalides");
           
        }
    }


    }

