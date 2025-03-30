<form action="app/includes/auth.php" method="POST">
    <input type="text" name="pseudo" placeholder="<?= translateText("Pseudo", $lang); ?>" required>
    <input type="password" name="password" placeholder="<?= translateText("Mot de passe", $lang); ?>" required>
    <button type="submit" name="login"><?= translateText("Se connecter", $lang); ?></button>
</form>
<a href="register.php"><?= translateText("Créer un compte", $lang); ?></a>
