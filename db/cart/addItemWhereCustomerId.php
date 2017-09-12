<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/dbConnect.php';
try{
    $sql = 'INSERT INTO cart(id_product, id_customer) VALUES (:id_product, :id_customer);';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id_customer', $customer_id);
    $s->bindValue(':id_product', $product_id);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error fetching category details.' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/error.php';
    exit();
}
?>