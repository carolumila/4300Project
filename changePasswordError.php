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

        $query1 = "SELECT * FROM profile 
                    WHERE user_id='$userID'";
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $profile = $statement1->fetch();

        $error = 'Incorrect old password. Password not updated.';

        include('edit_profile_header.php');
?>

<main>
            
            <h2><b>Your Profile</b></h2>
            <p class="error">Error! <?php echo $error; ?> <br>Please try again.</p>
            <form id="updateInfoForm" action="updateAccount.php" method="POST">
                <fieldset id="personalInfo">
                    <legend><b>Personal Information</b></legend>
                    
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" placeholder="First Name" value = <?php echo $data['firstName']; ?> required><br>

                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" placeholder="Last Name" value = <?php echo $data['lastName']; ?> required><br><br>

                    <label for="streetAddress">Street Address:</label>
                    <input type="text" name="streetAddress" placeholder="123 Dawg St." value = <?php echo $profile['streetAddr']; ?> required><br>

                    <label for="city">City:</label>
                    <input type="text" name="city" placeholder="Athens" value = <?php echo $profile['city']; ?> required><br>

                    <label for="state">State:</label>
                    <input type="text" name="state" placeholder="Georgia" value = <?php echo $profile['state']; ?> required><br>

                    <label for="zipCode">Zip Code:</label>
                    <input type="text" name="zipCode" placeholder="30606" value = <?php echo $profile['zip']; ?> required><br>

                </fieldset> <br>

                <fieldset id="accountInfo">
                    <legend><b>Account Information</b></legend>

                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="hairydawg123" value = <?php echo $data['username']; ?> required><br>

                    <label for="email">Email Address:</label>
                    <input type="text" name="email" placeholder="hairydawg123@uga.edu" value = <?php echo $data['email']; ?> required><br>

                </fieldset><br>

                <button type="submit" id="updateAccountButton">Update Account</button>
            </form><br>

            <form id="changePasswordForm" action="changePassword.php" method="POST">
                <fieldset id="passwordInfo">
                    <legend><b>Change Password</b></legend>

                    <label for="oldPassword">Old Password:</label>
                    <input type="password" name="oldPassword" placeholder="previous password" required><br>

                    <label for="newPassword">Create New Password:</label>
                    <input type="password" name="password" placeholder="new password" required><br>

                    <label for="newPassword2">Confirm New Password:</label>
                    <input type="password" name="password2" placeholder="new password" required><br>
                </fieldset><br>

                <button type="submit" id="changePasswordButton">Change Password</button>
            </form>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>

<?php
    }
?>