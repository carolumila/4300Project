<?php
    include('database.php');

    session_start();

    if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) {
        header("Location: sign_in.php");
    }
    else {
        $user = $_SESSION['username'];
        $password = $_SESSION['password'];

        $query = "SELECT";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UGA Merch!</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/edit_profile.css">
    </head>

    <body>
        <header>
            <a href="index.php"><img id="imageheader" src="images/UGA_logo.png" height="95" alt="logo"></a>
            <h1 id="title">UGA Marketplace!</h1>
            <form id="searchBarForm" action="results.php" method="GET">
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
                    <li><a href="index.php" class="current">Home</a></li>
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
                            <a href="edit_profile.php"><li>Edit Profile</li></a>
                            <a href="create_account.php"><li>Create Account</li></a>
                            <a href="admin_page.php"><li>Admin</li></a>
                        </ul>
                    </li>
                </ul>
        </nav>

        <main>
            <h2><b>Edit Profile</b></h2>
            <form id="updatePersonalInfoForm" action="updateAccount.php" method="POST">
                <fieldset id="personalInfo">
                    <legend><b>Update Personal Information</b></legend>
                    
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" placeholder="First Name"><br>

                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" placeholder="Last Name"><br><br>

                    <label for="streetAddress">Street Address:</label>
                    <input type="text" name="streetAddress" placeholder="123 Dawg St."><br>

                    <label for="city">City:</label>
                    <input type="text" name="city" placeholder="Athens"><br>

                    <label for="state">State:</label>
                    <input type="text" name="state" placeholder="Georgia"><br>

                    <label for="zipCode">Zip Code:</label>
                    <input type="text" name="zipCode" placeholder="30606"><br>

                </fieldset> <br>

                <button type="submit" id="createAccountButton">Update Personal Information</button>
            </form><br>

            <form id="updateAccountInfoForm" action="updateAccount.php" method="POST">
                <fieldset id="accountInfo">
                    <legend><b>Update Account Information</b></legend>

                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="hairydawg123"><br>

                    <label for="email">Email Address:</label>
                    <input type="text" name="email" placeholder="hairydawg123@uga.edu"><br>

                    <label for="password">Create Password:</label>
                    <input type="password" name="password" placeholder="password"><br>

                    <label for="password2">Confirm Password:</label>
                    <input type="password" name="password2" placeholder="password"><br>
                </fieldset><br>

                <button type="submit" id="createAccountButton">Update Account</button>

                
            </form>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>

<?php
    }
?>