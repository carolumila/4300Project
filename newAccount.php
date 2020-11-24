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

    $cardNumber = $_POST['cardNumber'];
    $cardType = $_POST['cardType'];
    $cardExp = $_POST['cardExp'];

    $query="INSERT INTO user (firstName, lastName, username, email, password, user_type) VALUES ('$first', '$last', '$user', '$email', '$password', 'customer')";
    $db->exec($query);
    $query1="INSERT INTO profile (streetAddr, city, state, zip) VALUES ('$address', '$city', '$state', '$zip')";
    $db->exec($query1);
    $query2="INSERT INTO paymentcard (cardNumber, type, expDate) VALUES ('$cardNumber', '$cardType', '$cardExp')";
    $db->exec($query2);

    $query3 = "SELECT * FROM user 
               WHERE username='$user' AND password='$password'";
    $statement = $db->prepare($query3);
    $statement->execute();
    $data = $statement->fetch();
    $userID = $data['user_id'];

    $query4="INSERT INTO `shopping cart` (user_id) VALUES ('$userID')";
    $db->exec($query4);

    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $password;
    $_SESSION['flag'] = 1;
    $_SESSION['userID'] = $userID;
    header("Location:index.php");
?>