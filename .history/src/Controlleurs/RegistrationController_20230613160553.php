<?php

namespace Foot\Controlleurs;

Class RegistrationController{


    public function Register(){

        if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

    }
}
}