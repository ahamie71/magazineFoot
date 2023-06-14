<?php

namespace Foot\Controlleurs;

use Foot\Entity\User;
use Foot\Model\UserRepository;

Class RegistrationController{


    public function Register(){

        if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            if ($password === $password2 && strlen($password) >= 6 && preg_match("/[a-z][0-9]/", $password)) {
                $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
              
                $UserRepo = new UserRepository;
                $user = $UserRepo->AddUser($username,$password,$email);
    }
}
}
}