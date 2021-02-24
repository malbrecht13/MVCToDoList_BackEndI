<?php
    
    $dsn = 'mysql:host=localhost;dbname=ToDoItems';
    $username = 'root';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        include('view/error.php');
    }
?>
    
