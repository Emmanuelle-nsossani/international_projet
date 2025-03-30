<?php

$css = 'preferences.css'; // Link to the CSS file if needed
$page_title = "Preferences"; // Page title

ob_start();
include 'app/view/preferences_content.php'; // Include the page content
$content = ob_get_clean();
include 'app/view/common/layout.php'; // Use the main layout