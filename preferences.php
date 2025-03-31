<?php


require_once __DIR__ . '/app/includes/deepl.php';
require_once __DIR__ . '/app/includes/session.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;

$css = 'preferences.css'; // Link to the CSS file if needed
$page_title = "Preferences"; // Page title

ob_start();
include 'app/view/preferences.view.php'; // Include the page content
$content = ob_get_clean();
include 'app/view/common/layout.php'; // Use the main layout