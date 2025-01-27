<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// If the request is for a static file, serve it directly
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Otherwise, serve the request through the Laravel application
require_once __DIR__.'/public/index.php';
