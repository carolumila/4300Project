<?php
    include('database.php');
    $productID=$_POST['product_id'];
    $query="DELETE FROM contains WHERE product_id='$productID'";
    $db->exec($query);
    include('shopping_cart.php');
?>