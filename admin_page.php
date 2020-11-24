<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/admin_page_stylesheet.css">
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
                            <a href="create_account.php"><li>Create Account</li></a>
                            <a href="admin_page.php" class="current"><li>Admin</li></a>
                        </ul>
                    </li>
                </ul>
            </nav>

        <?php if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) { ?>

            <main id="needToLogin">
                <h2 id= "loginStatement">Please login to access administrative pages.</h2><br>
                <p id="loginLink"><a href="sign_in.php" >Login Here</a></p>
            </main>

        <?php } else { ?>


            <?php if(isset($_SESSION['userType']) && $_SESSION['userType'] == 'admin') { ?>
            <main>
                <p class="link"><a href="manageusers.php"><img src="images/manageusers.png" alt="manageusers" height="150"><strong>Manage Users</strong></a></p><br><br><br>
                <p class="link"><a href="addproduct.php"><img src="images/addproduct.png" alt="addproduct" height="150"><strong>Add Products</strong></a></p>
            </main>
            <?php } else { ?>
            <main>
                <p>You do not have administrative access.</p>
            </main>
            <?php } ?>

        <?php } ?>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>