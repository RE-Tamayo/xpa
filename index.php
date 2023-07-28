<?php
    include_once "vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    include_once "src/http/routes.php";
    