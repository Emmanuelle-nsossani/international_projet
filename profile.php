<?php
require_once __DIR__ . '/app/includes/session.php';
require_once __DIR__ . '/app/includes/deepl.php';
require_once __DIR__ . '/app/includes/database.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch user information from the database
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Handle form submission for updating user information
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    // If no errors, update user information in the database
    if (!isset($error)) {
        $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        if ($stmt->execute([$username, $email, $user_id])) {
            $message = "Profile updated successfully!";
            // Update session variables with the new data
            $_SESSION['user_name'] = $username;
            $_SESSION['user_email'] = $email;
            // Update user information to reflect the new values
            $user['username'] = $username;
            $user['email'] = $email;
        } else {
            $error = "There was an error updating the profile.";
        }
    }
}

// Page settings
$page_title = "Profile";
$css = "auth.css";

// Output the content for the profile page
ob_start();
include 'app/view/auth/profile.view.php'; // Include the view for displaying the profile page
$content = ob_get_clean();

// Use the common layout for the page
include 'app/view/common/layout-log.php'; 
?>
