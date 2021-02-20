<?php

    $dsn = 'mysql:host=localhost;dbname=ToDoList';
    $username='root';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = 'Database error: ';
        $error_message .= $e->getMessage();
        include('error.php');
        exit();
    }
    