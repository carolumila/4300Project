<?php
    include('signInHeader.php');
?>

    <body>
        <main>
            <form id="signInForm" action="validateSignIn.php" method="post">
                <fieldset>
                    <legend><b>Sign In</b></legend><br>
                    <label>Username:</label><br>
                    <input type="text" name="user" placeholder="Username" required><br>
                    <label>Password:</label><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" value="Sign In">
                    <input type="reset" value="Clear">
                </fieldset>

                
            </form> <br>
            <button type="button" id="createAccountButton"><a href="create_account.php">Create Account</a></button>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>