<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/products/getProduct.php';

        foreach ($result as $row):
            $products[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price'],
                'quantity' => $row['quantity'],
                'category' => $row['category']
            );
        endforeach;

        foreach ($products as $product){
            echo '<pre>';
            var_dump($product);
            echo '</pre>';
        }
?>
