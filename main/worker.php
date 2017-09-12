<?php
    session_start();

    if (isset($_POST['action']) && $_POST['action'] == "Select"){
        $_SESSION['customerId'] = $_POST['customerId'];
    }

    $customerId = $_SESSION['customerId'];

    if (isset($_POST['action']) && $_POST['action'] == "Add to cart"){
        $product_id = $_POST["productId"];
        $customer_id = $_POST["customerId"];
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/cart/addItemWhereCustomerId.php';

        header('Location: .');
    }


    ###   GET PRODUCTS   ###
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

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/customers/getCustomer.php';

foreach ($result as $row):
    $customers[] = array(
        'id' => $row['id'],
        'name' => $row['name']
    );
endforeach;

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/db/cart/getItemCount.php';

$itemsInCart = $result['Item Count']



?>