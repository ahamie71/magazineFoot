<?Php
use Foot\Entity\User;


class UserController
{
    public function Connect()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new User();

        $user->UserRepository->findUser($username, $password);





    }

}