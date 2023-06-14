<?Php

use Foot\Entity\User;
use Foot\Model\UserRepository;


class UserController
{
    public function Connect()
    {
        // on verifie si il a bien rentrer les informations et a bien rempli les informations
        if(isset($_POST['username']) && $_POST['password']){
        $username = $_POST['username'];
        $password = $_POST['password'];
        }
        $user = new User();
        $userrepository = new UserRepository;
        $user = $this->$userrepository->findUser($username, $password);
        
        if ($user && password_verify($password,$user->getPassword())) {

            // on doit le rediriger vers une vue 
        
        }

        else {
             
            "informations incorrectes";
            // on lui affiche toujours le formaulaire . 

        }


    }

    }
};