<?php

    require('config.php');

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        include('view/error.php');
    }
    