<?php
    include('database.php');
    $productID=$_POST['product_id'];
    $query="DELETE FROM contains WHERE product_id='$productID' LIMIT 1";
    $db->exec($query);
    include('shopping_cart.php');
?>