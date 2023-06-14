<?Php
namespace Foot\Controlleurs;
session_start();

use Foot\Entity\User;
use Foot\Model\UserRepository;

class ConnectionController
{
    public function Connect()
    {
        // on verifie si il a bien rentrer les informations et a bien rempli les informations
        if (isset($_POST['username']) && $_POST['password']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = new User();
            $userRepository = new UserRepository;
            $user = $userRepository->findUser($username);
             
            if (!$user || $password != $user->password) {
                $error = 'erreur';
                require('./../src/View/ConnectionForm.php'); 
            } else {
                $_SESSION['user'] = $user;
                header('Location:./../src/View/Posts/DisplayPosts.php');
            }
        } else {
            require('./../src/View/ConnectionForm.php');
        }
       
    }
   
    

}
