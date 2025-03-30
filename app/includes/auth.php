<?php
require_once 'config.php';
require_once 'session.php';
require_once 'database.php';

// Inscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Les mots de passe ne correspondent pas !");
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO users (username, pseudo, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $pseudo, $hashed_password])) {
        echo "Inscription réussie ! <a href='/login.php'>Se connecter</a>";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}

// Connexion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE pseudo = ?");
    $stmt->execute([$pseudo]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../../dashboard.php");
        exit;
    } else {
        echo "Pseudo ou mot de passe incorrect !";
    }
}
?>
