<?Php

use Foot\Entity\User;
use Foot\Model\UserRepository;


class UserController
{
    public function Connect()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new ();

        $user = $this->UserRepository->findUser($username, $password);

      



    }

}