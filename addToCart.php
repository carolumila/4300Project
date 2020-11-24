<?php

include('database.php');
session_start();
$userID = $_SESSION['userID'];
$productID = $_POST['productID'];

$query="SELECT shoppingCart_id
        FROM `shopping cart` 
        WHERE user_id='$userID'";
$statement = $db->prepare($query);
$statement->execute();
$data = $statement->fetch();
$cartID = $data['shoppingCart_id'];

$query1="INSERT INTO contains (shoppingCart_id,product_id) VALUES ('$cartID','$productID')";
$db->exec($query1);


// return to the appropriate page
$category = $_POST['productCategory'];
$isSearch = $_POST['isSearch'];
if($isSearch=='no') {
    header("Location: results.php?search=$category");
} else if($isSearch == 'yes') {
    header("Location: searchResults.php?search=$category");
} else if($isSearch == 'index') {
    header("Location: index.php");
}

?>