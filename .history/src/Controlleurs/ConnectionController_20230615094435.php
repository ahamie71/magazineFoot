<?Php


namespace Foot\Controlleurs;


use Foot\Entity\User;
use Foot\Model\UserRepository;

class ConnectionController
{
    public function Connect()
    {    
        $error= '';
        // on verifie si il a bien rentrer les informations et a bien rempli les informations
        if (isset($_POST['username']) && $_POST['password']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $userRepository = new UserRepository;
            $user = new User();
            $user = $userRepository->findUser($username);
             
            if (!$user || !password_verify($password ,$user->getPassword())) {
                $error = 'erreur';
                require('./../src/View/ConnectionForm.php'); 
            } else {
                $_SESSION['user'] = $user; 
                header('Location:index.php?action=Display');
                exit();
            }
        } else {
            require('./../src/View/ConnectionForm.php');
        }
       
    }
   
    public function Logout(){
    session_destroy();
    header('location:index.php?action=Home');
    exit();
    }


    
}


