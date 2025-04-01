<?php

require_once __DIR__ . '/app/includes/deepl.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;


$page_title = "ICE CRIME";
$css = "preventions.css";

ob_start();

include 'app/view/preventions.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';