<?php

    require('model/configure.php');

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        include('view/error.php');
    }
    