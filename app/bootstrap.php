<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header("Content-Security-Policy: frame-ancestors 'none'");
//header("Content-Security-Policy: default-src 'self'");
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer");
header("Feature-Policy: sync-xhr 'none'");


foreach (require __DIR__ . '/modules/modules.php' as $module) {
    require_once __DIR__ . $module;
}


Router::route();

