<?php
 namespace Foot\View;

Class ConnectionForm{

        public function showLoginForm() {
            // Afficher le formulaire de connexion
            echo '
           
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <form method="post" action="">
                <label for="username">Nom d\'utilisateur:</label>
                <input type="text" id="username" name="username" required><br>
                
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required><br>
                
                <button type="submit">Se connecter</button>
            </form>
            ';
        }
}


