<?php
    
    include('database.php');

    $first = $_POST['firstName'] ?? '';
    $last = $_POST['lastName'] ?? '';
    $address = $_POST['streetAddress'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $zip = $_POST['zipCode'] ?? '';
    $email = $_POST['city'] ?? '';
    $password = $_POST['city'] ?? '';
    $user = $_POST['username'] ?? '';


    $query="INSERT INTO profile (streetAddr, city, state, zip) VALUES ( '$address', '$city', '$state', '$zip')";
    $db->exec($query);
    $query="INSERT INTO user (firstName, lastName, username, email, password) VALUES ('$first', '$last', '$user', '$email', '$password')";
    $db->exec($query);
    
    include('index.php');
?>