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
$isSearch = $_POST['isSearch'];
if($isSearch=='no') {
    $category = $_POST['productCategory'];
    header("Location: results.php?search=$category");
} else if($isSearch == 'yes') {
    $search = $_POST['searchValue'];
    header("Location: searchResults.php?search=$search");
} else if($isSearch == 'index') {
    header("Location: index.php");
}

?>