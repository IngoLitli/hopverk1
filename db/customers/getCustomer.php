<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/dbConnect.php';
try{
    $result = $pdo->query('SELECT id, name FROM customers');
}
catch (PDOException $e){
    $error = 'Error fetching category details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/db/error.php';
    exit();
}
?>