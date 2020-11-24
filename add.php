<?php
    include('database.php');

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';

    $query = "INSERT INTO product (name, category, price, path) VALUES ('$name', '$category', '$price', 'images/noImage.png')";
    $db->exec($query);

    include('addProductSuccess.php');
?>