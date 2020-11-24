<?php

    $user = $_SESSION['username'];
    $password = $_SESSION['password'];

    $query = "SELECT * FROM user 
                WHERE username='$user' AND password='$password'";
    $statement = $db->prepare($query);
    $statement->execute();
    $data = $statement->fetch();
    $userID = $data['user_id'];

    $query1 = "SELECT * FROM profile 
                WHERE user_id='$userID'";
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $profile = $statement1->fetch();

    $query2 = "SELECT * FROM paymentcard
                WHERE user_id = '$userID'";
    $statement2 = $db->prepare($query2);
    $statement2->execute();
    $data2 = $statement2->fetch();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Profile</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/edit_profile.css">
    
    </head>

    <body>
        <header>
            <a href="index.php"><img id="imageheader" src="images/UGA_logo.png" height="95" alt="logo"></a>
            <h1 id="title">UGA Marketplace!</h1>
            <form id="searchBarForm" action="searchResults.php" method="GET">
                <input type="text" id="searchBar" name="search" placeholder="Search">
                <button type="submit" id="searchButton"><img src="images/magnifying_glass.png" height="15" width="15"></button>
            </form>
                    
            <p class="headerLinks" id="shoppingCart"><a href="shopping_cart.php" >Shopping Cart</a></p>
            <?php 
                if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) { ?>
            <p class="headerLinks" id="signIn"><a href="sign_in.php" >Sign In</a></p>
            <?php
                }
                else { ?>
            <p class="headerLinks" id="signIn"><a href="logout.php" >Logout</a></p>
            <?php
                }
            ?>
        </header>
        <nav id="nav_list">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li class="noHighlight">Clothing
                        <ul>
                            <li><a href="results.php?search=shirts">Shirts</a></li>
                            <li><a href="results.php?search=pants">Pants</a></li>
                            <li><a href="results.php?search=hats">Hats</a></li>
                            <li><a href="results.php?search=accessories">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="noHighlight">Account
                        <ul>
                            <a href="edit_profile.php" class="current"><li>Edit Profile</li></a>
                            <a href="create_account.php"><li>Create Account</li></a>
                            <a href="admin_page.php"><li>Admin</li></a>
                        </ul>
                    </li>
                </ul>
        </nav>

    </body>
</html>