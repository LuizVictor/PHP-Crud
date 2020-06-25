<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        # code...
        require __DIR__ . '/views/home.php';
        break;
}
