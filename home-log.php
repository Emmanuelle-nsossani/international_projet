<?php
require_once __DIR__ . '/app/includes/session.php';
require_once __DIR__ . '/app/includes/deepl.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$page_title = "Tableau de bord";
$css = "home.css";

ob_start();
include 'app/view/home-log.view.php'; // Include the page content

$content = ob_get_clean();

include 'app/view/common/layout-log.php';
?>
