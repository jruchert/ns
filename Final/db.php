<?php
    $dsn = 'mysql:host=db;dbname=ns_guitar_shop';
    $username = 'nsalazar';
    $password = 'nsSecret';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }
