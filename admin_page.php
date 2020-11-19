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
                        <a href="create_account.php"><li>Create Account</li></a>
                        <a href="admin_page.php" class="current"><li>Admin</li></a>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <p>Admin page is currently under construction.</p>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>