<?Php

use Foot\Entity\User;
use Foot\Model\UserRepository;


class UserController
{
    public function Connect()
    {
        if(isset($_POST))
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();

        $userrepository = new UserRepository;
        $user = $this->$userrepository->findUser($username, $password);
        
        
        



    }

}