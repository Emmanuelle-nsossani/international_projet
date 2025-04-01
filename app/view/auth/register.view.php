<main id="register">
    <div id="intro">
        <h1>Pourquoi s'abonner ?</h1>
        <p>Connectez-vous pour accéder à nos enquêtes exclusives.</p>
    </div>
    <form action="app/includes/auth.php" method="POST">
        <div class="form-item">
            <label for="username">Entrer votre prénom :</label>
            <input type="text" name="username" placeholder="<?= translateText("Nom d'utilisateur", $lang); ?>" required>
        </div>
        <div class="form-item">
            <label for="email">Entrer votre adresse mail :</label>
            <input type="email" name="email" placeholder="<?= translateText("Adresse mail", $lang); ?>" required>
        </div>
        <div class="form-item">
            <label for="password">Entrer votre mot de passe :</label>
            <input type="password" name="password" placeholder="<?= translateText("Mot de passe", $lang); ?>" required>
        </div>
        <div class="form-item">
            <label for="password">Entrer à nouveau votre mot de passe :</label>
            <input type="password" name="confirm_password" placeholder="<?= translateText("Confirmer le mot de passe", $lang); ?>" required>
        </div>
        <button type="submit" name="register"><?= translateText("S'inscrire", $lang); ?></button>
        <a href="login.php"><?= translateText("Déjà un compte ? Se connecter", $lang); ?></a>
    </form>
</main>