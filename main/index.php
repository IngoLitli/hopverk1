<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/main/worker.php'?>
<html>
    <head>
        <title>PálIngLin</title>
        <link rel="stylesheet" type="text/css" href="../styles/mainPage/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
    <div class="navbarClass">
        <ul id="navbarUl">
            <li class="navbarLi"><a class="active" href="?">Home</a></li>
            <li class="navbarLi"><a href="?">Categories</a></li>
            <li class="navbarLi"><a href="../cart">Items In Cart: <?php echo $itemsInCart;?></a></li>
            <li class="navbarLi">
                <form action="" method="post" id="selectCustomer">
                    <select name="customerId">
                        <?php foreach ($customers as $customer): ?>
                            <option value="<?php echo $customer['id'];?>"
                                <?php
                                if ($customer['id'] == $customerId){
                                    echo "selected";
                                }?>><?php echo $customer['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Select" name="action">
                </form>
            </li>
        </ul>
    </div>
    <div id="products" style="position: relative; top: 2em;">
        <?php foreach ($products as $product):?>
            <div class="productContainer" style="border: rgb(0,0,0) solid 1px; display: inline-block; margin: 0.5em; padding: 0.2em">
                <form action="" method="post">
                    <h2><?php echo $product['name'];?></h2>
                    <p>Price = <?php echo $product['price'];?></p>
                    <p>Quantity = <?php echo $product['quantity'];?></p>
                    <p>Category = <?php echo $product['category'];?></p>
                    <input type="hidden" name="productId" value="<?php echo $product['id']; ?>" id="productId">
                    <input type="hidden" name="customerId" value="<?php echo $customerId; ?>" id="customerId">
                    <input type="submit" value="Add to cart" name="action">
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    </body>
</html>