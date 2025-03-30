<?php

require_once __DIR__ . '/app/includes/deepl.php';
require_once __DIR__ . '/app/includes/session.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;

$page_title = "Register";
$css = "home.css";

ob_start();

include 'app/view/auth/register.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
