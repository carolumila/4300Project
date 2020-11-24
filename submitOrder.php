<?php

include('database.php');
session_start();

$cartID = $_SESSION['userID'];

$query="DELETE FROM contains WHERE shoppingCart_id='$cartID'";
$db->exec($query);

header("Location: thanks.php");
?>