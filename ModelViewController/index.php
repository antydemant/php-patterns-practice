<?php

require 'vendor/autoload.php';

require_once('System/views.php');
require_once('System/database.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

require_once('Views/layout.tpl');