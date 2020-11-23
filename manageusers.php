<?php
    include('database.php');

    $query = 'SELECT * FROM user';

    $users = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main_stylesheet.css">
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

        <main>
            <table border=1 align="center">
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Type</th>
                    <th>Promote/Demote</th>
                    <tr>
                        <?php foreach($users as $user):?>
                        <td><?php echo $user['user_id']?></td>
                        <td><?php echo $user['firstName']?></td>
                        <td><?php echo $user['lastName']?></td>
                        <td><?php echo $user['user_type']?></td>
                        <td>
                            <form action="changeUserType.php" method="POST">
                                <input type="hidden" name="userID" value=<?php echo $user['user_id']?>>
                                <input type="submit" value="Change Type" <?php if(isset($_SESSION['userID']) && $user['user_id'] == $_SESSION['userID']) { ?>disabled<?php }?>>
                                
                            </form>
                        </td>
                    </tr>
                        <?php endforeach;?>
                </tr>
            </table>
            <a href="admin_page.php"><button>Back</button></a><br><br><br>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>
</html>