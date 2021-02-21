<?php

    $dsn = 'mysql:host=localhost;dbname=ToDoList';
    $username='root';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        include('view/error.php');
    }
    