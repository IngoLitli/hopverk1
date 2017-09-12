<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/dbConnect.php';
try{
    $sql = 'SELECT count(*) as "Item Count" FROM cart WHERE id_customer = :id;';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $customerId);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error fetching category details.' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/error.php';
    exit();
}
$result = $s->fetch();
?>