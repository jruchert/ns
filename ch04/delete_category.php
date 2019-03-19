<?php
require_once 'database.php';
$category = filter_input(INPUT_POST, 'category_id');
if ($category == null) {
    $error = 'bruh';
    include 'error.php';
} else {
    $query = 'DELETE FROM categories
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category);
    $statement->execute();
    $statement->closeCursor();
    include 'category_list.php';
}