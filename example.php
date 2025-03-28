<?php

$css = 'styles.css';
$page_title = "Example";

ob_start();
include 'app/view/example.view.php';
$content = ob_get_clean();
include 'app/view/common/layout.php';