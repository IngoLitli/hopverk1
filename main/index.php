<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur3/store/main/worker.php'?>
<html>
    <head>
        <title>PálIngLin</title>
        <link rel="stylesheet" type="text/css" href="../styles/mainPage/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
    <ul id="navbarUl">
        <li class="navbarLi"><a class="active" href="?">Home</a></li>
        <li class="navbarLi"><a href="?">Categories</a></li>
    </ul>
    <div id="products">
        <?php foreach ($products as $product):?>
            <div class="productContainer" style="border: rgb(0,0,0) solid 1px">
                <h2><?php echo $product['name'];?></h2>
                <p>Price = <?php echo $product['price'];?></p>
                <p>Quantity = <?php echo $product['quantity'];?></p>
                <p>Category = <?php echo $product['category'];?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </body>
</html>