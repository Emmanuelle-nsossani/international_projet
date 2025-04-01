<main id="login">
    <div id="intro">
        <h1>Se connecter</h1>
        <p>Connectez-vous pour accéder à nos enquêtes exclusives.</p>
    </div>
    <form action="app/includes/auth.php" method="POST">
        <div class="form-item">
            <label for="pseudo">Entrer votre pseudo :</label>
            <input type="text" name="pseudo" placeholder="<?= translateText("Pseudo", $lang); ?>" required>
        </div>
        <div class="form-item">
            <label for="password">Entrer votre mot de passe :</label>
            <input type="password" name="password" placeholder="<?= translateText("Mot de passe", $lang); ?>" required>
        </div>
        <button type="submit" name="login"><?= translateText("Log in", $lang); ?></button>
        <a href="register.php"><?= translateText("Toujours pas de compte ? Créer un compte", $lang); ?></a>
    </form>
</main>