<?php

    $dsn = 'mysql:host=phtfaw4p6a970uc0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ze3n7uyhcoywmp5a';
    $username='eygt4158xbq3bip0';
    $password='tjl94cvi1so3n1hv';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        include('view/error.php');
    }
    