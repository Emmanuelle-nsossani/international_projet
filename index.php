<?php

$page_title = "ICE CREAM";
$css = "home.css";

ob_start();

include 'app/view/home.view.php';
$content = ob_get_clean();


include 'app/view/common/layout.php';