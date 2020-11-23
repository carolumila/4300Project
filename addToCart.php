<?php

include('database.php');
session_start();
$userID = $_SESSION['userID'];


$productID = $_POST['productID'];


if(!isset($_SESSION['orderID'])) {

    $_SESSION['orderID'] = 1;
    $_SESSION['cartID'] = 1;

    $query="INSERT INTO order (order_id,user_id,shoppingCart_id) VALUES (1,$userID,1)"
    $db->exec($query);
} 


// return to the appropriate page
$category = $_POST['productCategory'];
$isSearch = $_POST['isSearch'];
if($isSearch=='no') {
    header("Location: results.php?search=$category");
} else {
    header("Location: searchResults.php?search=$category");
}