<?php
 namespace F

Class ConnectionForm{

        public function showLoginForm() {
            // Afficher le formulaire de connexion
            echo '
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


