<?php

    require('model/autoload.php');

    $dsn = env('DB_DSN');
    $username = env('DB_USERNAME');
    $password = env('DB_PASSWORD');

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        include('view/error.php');
    }
    