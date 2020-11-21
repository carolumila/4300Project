<?php
    include('database.php');

    $search = isset($_GET['search']) ? $_GET['search'] : '';

    try{
        $query = "SELECT * FROM product WHERE category='$search'";
        $items = $db->query($query);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Results</title>
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

    <aside>
    <?php foreach($items as $item):?>
        <img src="<?php echo $item['path']?>" alt="<?php echo $item['name']?>" height="200">
        <p><?php echo $item['name']?></p>
        <p>$<?php echo $item['price']?></p>
    <?php endforeach;?>
    </aside>

    <footer>
        <p>&copy; 2020 UGA Marketplace</p>
    </footer>
</body>
</html>