<?php

require_once 'includes/header.php';

$pagesDir = 'pages/';


$pages = scandir($pagesDir);

foreach ($pages as $page) {
    if (pathinfo($page, PATHINFO_EXTENSION) == 'php' && $page !== 'index.php') {
        include $pagesDir . $page;
    }
}

require_once 'includes/footer.php';
?>