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
            var_dump('1') ;
            if (!$user || $password != $user->getPassword()) {
               
                var_dump('2') ;
                $error = 'erreur';
                require('./../src/View/ConnectionForm.php'); 
            } else {
                var_dump('3') ;
                die()
                $_SESSION['user'] = $user;
                header('Location:./../src/View/Posts/DisplayPosts.php');
            }
        } else {
            var_dump('4') ;
            require('./../src/View/ConnectionForm.php');
        }
       
    }
   
    

}
