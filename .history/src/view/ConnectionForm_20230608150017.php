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
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            ';
        }
}


