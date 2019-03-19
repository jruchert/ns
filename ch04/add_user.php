<?php
require_once 'database.php';
$users = filter_input(INPUT_POST, 'username');
if ($users == null) {
    $error = 'bruh';
    include 'error.php';
} else {
    $query = 'INSERT INTO users (username) VALUES ()';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $users);
    $statement->execute();
    $statement->closeCursor();
    include 'username.php';
}
