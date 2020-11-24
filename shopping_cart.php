<?php
    include('database.php');

    session_start();

    if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) {
        header("Location: sign_in.php");
    }
    else {
        $user = $_SESSION['username'];
        $password = $_SESSION['password'];

        $query = "SELECT * FROM user 
                    WHERE username='$user' AND password='$password'";
        $statement = $db->prepare($query);
        $statement->execute();
        $data = $statement->fetch();
        $userID = $data['user_id'];
        
        $query1="SELECT contains.product_id,name,category,price
                 FROM contains INNER JOIN product ON contains.product_id=product.product_id 
                 WHERE shoppingCart_id=
                    (SELECT shoppingCart_id
                     FROM `shopping cart` 
                     WHERE user_id='$userID')";
        $products=$db->query($query1);

        $query2="SELECT SUM(price) 
                 FROM contains INNER JOIN product ON contains.product_id=product.product_id 
                 WHERE shoppingCart_id= 
                    (SELECT shoppingCart_id 
                     FROM `shopping cart` 
                     WHERE user_id='$userID')";
        $s=$db->prepare($query2);
        $s->execute();
        $sum=$s->fetch();
        $priceSum=$sum['SUM(price)'];

        $query3="SELECT COUNT(contains.product_id) 
                 FROM contains INNER JOIN product ON contains.product_id=product.product_id 
                 WHERE shoppingCart_id= 
                    (SELECT shoppingCart_id 
                     FROM `shopping cart` 
                     WHERE user_id='$userID')";
        $c=$db->prepare($query3);
        $c->execute();
        $count=$c->fetch();
        $num=$count['COUNT(contains.product_id)'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UGA Merch!</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/shopping_cart_stylesheet.css">
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
                            <a href="edit_profile.php"><li>Edit Profile</li></a>
                            <a href="create_account.php"><li>Create Account</li></a>
                            <a href="admin_page.php"><li>Admin</li></a>
                        </ul>
                    </li>
                </ul>
        </nav>

        <main>
            <h2><b>Your Shopping Cart</b></h2>
            <table id="cart">
                <tr>
                    <th width="25px">ID</th>
                    <th width="300px">Name</th>
                    <th width="100px">Category</th>
                    <th width="50px">Price</th>
                    <th width="75px"></th>
            <?php foreach($products as $product):?>
                <tr>
                    <td><?php echo $product['product_id']?></td>
                    <td><?php echo $product['name']?></td>
                    <td><?php echo $product['category']?></td>
                    <td><?php echo $product['price']?></td>
                    <td><form action="deleteFromCart.php" method="post">
                    <input type="hidden" name="product_id" value=<?php echo $product['product_id']?>>
                    <input type="submit" value="Remove" width="75px"></form></td>
                </tr>
            <?php endforeach;?>
            </table>
            <p>Subtotal (<?php echo $num?> item(s)) : $<?php echo $priceSum?></p>
            <p id="link"><a href="checkout.php">Proceed To Checkout</a></p>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>