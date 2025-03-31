<?php

require_once __DIR__ . '/app/includes/deepl.php';

// Set the chosen language
$lang = $_GET['lang'] ?? ($_SESSION['lang'] ?? 'fr');
$_SESSION['lang'] = $lang;

$css = 'home.css';
$page_title = "Example";

ob_start();
include 'app/view/example.view.php';
$content = ob_get_clean();
include 'app/view/common/layout.php';

//TEZIHOQHIVQIBO