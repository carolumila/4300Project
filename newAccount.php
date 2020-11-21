<?php
    
    include('database.php');

    $first = $_POST['firstName'] ?? '';
    $last = $_POST['lastName'] ?? '';
    $address = $_POST['streetAddress'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $zip = $_POST['zipCode'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $user = $_POST['username'] ?? '';

    $query="INSERT INTO user (firstName, lastName, username, email, password) VALUES ('$first', '$last', '$user', '$email', '$password')";
    $db->exec($query);
    $query1="INSERT INTO profile (user_id, streetAddr, city, state, zip) VALUES ('$user_id', '$address', '$city', '$state', '$zip')";
    $db->exec($query1);
    
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $password;
    $_SESSION['flag'] = 1;
    header("Location:index.php");
?>