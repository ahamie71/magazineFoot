<?php
namespace Foot\Controlleurs;


use Foot\Entity\User;
use Foot\Model\UserRepository;

class RegistrationController
{
    public function Register()
    {
        $error = '';
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $admin = '1';
            if ($password === $password2 && strlen($password) >= 6 && preg_match("/[a-z][0-9]/", $password)) {
                $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
                $userRepository = new UserRepository;
                $user = new User();
                $user = $userRepository->addUser($username, $pass, $email, $admin);
                header('Location:index.php?action=Login');
            } else {
                $error = 'erreur';
            }
        } else {
            require('./../src/View/RegistrationForm.php');
        }
    }
}