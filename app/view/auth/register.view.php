<form action="app/includes/auth.php" method="POST">
    <input type="text" name="username" placeholder="<?= translateText("Nom d'utilisateur", $lang); ?>" required>
    <input type="text" name="pseudo" placeholder="<?= translateText("Pseudo", $lang); ?>" required>
    <input type="password" name="password" placeholder="<?= translateText("Mot de passe", $lang); ?>" required>
    <input type="password" name="confirm_password" placeholder="<?= translateText("Confirmer le mot de passe", $lang); ?>" required>
    <button type="submit" name="register"><?= translateText("S'inscrire", $lang); ?></button>
</form>
<a href="login.php"><?= translateText("Déjà un compte ? Se connecter", $lang); ?></a>
