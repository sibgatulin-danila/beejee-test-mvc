<?php

ini_set('display_errors', 1);
require_once 'autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

App\Helper\Route::init();


