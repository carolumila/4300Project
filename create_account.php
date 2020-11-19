<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UGA Marketplace!</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/create_account_stylesheet.css">
    </head>

    <body>
        <header>
            <a href="index.php"><img id="imageheader" src="images/UGA_logo.png" height="95" alt="logo"></a>
            <h1 id="title">UGA Marketplace!</h1>
            <form id="searchBarForm" method="get" >
                <input type="text" id="searchBar" placeholder="Search">
                <button type="submit" id="searchButton"><img src="images/magnifying_glass.png" height="15" width="15"></button>
            </form>
            <p class="headerLinks" id="shoppingCart"><a href="shopping_cart.php" >Shopping Cart</a></p>
            <p class="headerLinks" id="signIn"><a href="sign_in.php" >Sign In</a></p>
        </header>

        <nav id="nav_list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li class="noHighlight">Clothing
                    <ul>
                        <li><a href="results_page.php">Shirts</a></li>
                        <li><a href="results_page.php">Pants</a></li>
                        <li><a href="results_page.php">Hats</a></li>
                        <li><a href="results_page.php">Accessories</a></li>
                    </ul>
                </li>
                <li class="noHighlight"><a class="current">Account</a>
                    <ul>
                        <a href="edit_profile.php"><li>Edit Profile</li></a>
                        <a href="create_account.php" class="current"><li>Create Account</li></a>
                        <a href="admin_page.php"><li>Admin</li></a>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <h2><b>Create Account</b></h2>
            <form id="createAccountForm">
                <fieldset id="personalInfo">
                    <legend><b>Personal Information</b></legend>
                    
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

                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" name="phoneNumber" placeholder="555-555-5555"><br>

                </fieldset> <br>

                <fieldset id="accountInfo">
                    <legend><b>Account Information</b></legend>

                    <label for="email">Email Address:</label>
                    <input type="text" name="email" placeholder="hairydawg123@uga.edu"><br>

                    <label for="password">Create Password:</label>
                    <input type="text" name="password" placeholder="password"><br>

                    <label for="password2">Confirm Password:</label>
                    <input type="text" name="password2" placeholder="password"><br>
                </fieldset><br>

                <button type="submit" id="createAccountButton">Create Account</button>

                
            </form>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>