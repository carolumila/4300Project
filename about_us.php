<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UGA Merch!</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main_stylesheet.css">
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
                        <li><a href="about_us.php" class="current">About Us</a></li>
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
            <h1>Who are we?</h1>
            <p>We are a small group of four students who are making an E-Commerce website
                for our CSCI 4300 class.
            </p>
            <h1>Goal of this project</h1>
            <p>
                The goal of this project is to use what we have learned in our web development
                class to construct a fully-functioning website complete with a SQL database for storing
                information on customers and products.
            </p>
            <h1>Project Requirements</h1>
            <p>
                5 HTML Pages<br>
                3 MySQL entities<br>
                2 User interactions that change the database records<br>
                1 dynamically generated records such as a list<br>
                1 Usage of Javascript to validate uder input<br>
                1 CSS File<br>
            </p>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>