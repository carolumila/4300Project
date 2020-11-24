<!DOCTYPE html>
<html lang="en">



<script type="text/javascript">
function checkform() {
        var password = document.getElementById("firstPassword").value;
        var confirmPassword = document.getElementById("secondPassword").value;
        var pass = document.getElementById("passError");
        if (password != confirmPassword) {
            pass.innerHTML = "Passwords do not match. Try again.";
            return false;
        } else{
            pass.innerHTML = "";
        }
    return true;
}
</script>

    <head>
        <title>Create Account</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/create_account_stylesheet2.css">
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
                    session_start();
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
                                <a href="edit_profile.php"><li>Edit Profile</li></a>
                                <a href="create_account.php" class="current"><li>Create Account</li></a>
                                <a href="admin_page.php"><li>Admin</li></a>
                            </ul>
                        </li>
                    </ul>
                </nav>

        <?php 
            if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) { ?>
        <main>
            <h2><b>Create Account</b></h2>
            <form id="createAccountForm" action="newAccount.php" method="POST">
                <fieldset id="personalInfo">
                    <legend><b>Personal Information</b></legend>
                    
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" required><br>

                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" required><br><br>

                    <label for="streetAddress">Street Address:</label>
                    <input type="text" name="streetAddress" id="streetAddress" placeholder="123 Dawg St." required><br>

                    <label for="city">City:</label>
                    <input type="text" name="city" id="city" placeholder="Athens" required><br>

                    <label for="state">State:</label>
                    <input type="text" name="state" id="state" placeholder="Georgia" required><br>

                    <label for="zipCode">Zip Code:</label>
                    <input type="number" name="zipCode" id="zipCode" placeholder="30606" required><br>

                </fieldset> <br>

                <fieldset id="accountInfo">
                    <legend><b>Account Information</b></legend>

                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="hairydawg123" required><br>

                    <label for="email">Email Address:</label>
                    <input type="email" name="email" placeholder="hairydawg123@uga.edu" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>

                    <label for="password">Create Password:</label>
                    <input type="password" name="password" id="firstPassword" placeholder="password" onkeyup="checkPass();" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <abbr id="passError" style="color:red;"></abbr><br>

                    <label for="password2">Confirm Password:</label>
                    <input type="password" name="password2" id="secondPassword" placeholder="password" onkeyup="checkPass();" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
                </fieldset><br>

                <fieldset id="cardInfo">
                    <legend><b>Card Information</b></legend>

                    <label for="cardNumber">Card Number:</label>
                    <input type="text" name="cardNumber" placeholder="xxxx xxxx xxxx xxxx" pattern="([0-9]{4}( )){3}[0-9]{4}" title="Required format: xxxx xxxx xxxx xxxx" required><br>

                    <label for="cardType">Card Type:</label>
                    <select name="cardType" required>
                        <option>Mastercard</option>
                        <option>Visa</option>
                        <option>Discover</option>
                        <option>American Express</option>
                    </select><br>

                    <label id="clearFloat" for="cardExp">Expiration Date:</label>
                    <input type="month" name="cardExp" required><br>

                </fieldset><br>

                <button type="submit" id="createAccountButton" onclick="return checkform()">Create Account</button>

                
            </form>
        </main>
        <?php
            }
            else { ?>
        <main id="needToLogout">
                <h2 id= "logoutStatement"> Please logout to create a new account.</h2><br>
                <p id="logoutButton"><a href="logout.php" >Logout Here</a></p>
        </main>
        <?php
            }
        ?>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>