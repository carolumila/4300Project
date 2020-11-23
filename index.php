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
            <p class="headerLinks" id="signIn"><a href="sign_in.php" >Sign In</a></p>
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
            <h1>Featured Items</h1><br>
            <aside>
                <img src="images/shirt1.jpg" height="200"><br>
                <h2>Long Sleeve Grey T-Shirt</h2>
                <p>$39.99</p>
            </aside>
            <aside>
                <img src="images/pants2.jpg" height="200"><br>
                <h2>UGA Jogger Pants</h2>
                <p>42.99</p>
            </aside>
            <aside>
                <img src="images/hat3.jpg" height="200"><br>
                <h2>Red Georgia Hat</h2>
                <p>24.99</p>
            </aside>
            <aside>
                <img src="images/accessories1.jpg" height="200"><br>
                <h2>UGA Clear Tote Bag</h2>
                <p>13.99</p>
            </aside>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>