<?php
    $dsn = 'mysql:host=db;dbname=ns_guitar_shop';
    $username = 'neftalis';
    $password = 'doggie:-)';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }
