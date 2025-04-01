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
$stmt = $db->prepare("SELECT name, email, avatar FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Handle form submission for updating user information
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $avatar = $user['avatar']; // Keep the current avatar if no new one is uploaded

    // Check if a new avatar image is uploaded
    if (!empty($_FILES['avatar']['name'])) {
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $file_ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

        // Validate file extension
        if (!in_array($file_ext, $allowed_extensions)) {
            $error = "Invalid image format! Only JPG, PNG, GIF are allowed.";
        } else {
            // Upload new image
            $target_dir = __DIR__ . '/../uploads/';
            $avatar_filename = time() . "_" . basename($_FILES["avatar"]["name"]);
            $target_file = $target_dir . $avatar_filename;

            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                $avatar = 'uploads/' . $avatar_filename;
            } else {
                $error = "Error uploading the avatar image.";
            }
        }
    }

    // If no errors, update user information in the database
    if (!isset($error)) {
        $stmt = $db->prepare("UPDATE users SET name = ?, email = ?, avatar = ? WHERE id = ?");
        if ($stmt->execute([$name, $email, $avatar, $user_id])) {
            $message = "Profile updated successfully!";
            // Update session variables with the new data
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_avatar'] = $avatar;
            // Update user information to reflect the new values
            $user['name'] = $name;
            $user['email'] = $email;
            $user['avatar'] = $avatar;
        } else {
            $error = "There was an error updating the profile.";
        }
    }
}

// Page settings
$page_title = "Profile";
$css = "profile.css";

// Output the content for the profile page
ob_start();
include 'app/view/profile.view.php'; // Include the view for displaying the profile page
$content = ob_get_clean();

// Use the common layout for the page
include 'app/view/common/layout.php'; 
?>
