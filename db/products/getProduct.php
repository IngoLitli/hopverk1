<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/dbConnect.php';
try{
    $result = $pdo->query('SELECT id, name, price, quantity, category FROM products');
}
catch (PDOException $e){
    $error = 'Error fetching category details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/db/error.php';
    exit();
}
?>