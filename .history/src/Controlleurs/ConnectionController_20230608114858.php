<?Php
use Foot\Entity\User; ;
use Foot\Model\UserRepository;

class UserController
{
    public function Connect()
    {
        $user = new User();
         
        $this->UserRepository->findUser();
         
         

        

    }

}