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
                    <input type="text" name="username" placeholder="hairydawg123" value = <?php echo $data['username']; ?> disabled><br>

                    <label for="email">Email Address:</label>
                    <input type="text" name="email" placeholder="hairydawg123@uga.edu" value = <?php echo $data['email']; ?> required><br>

                </fieldset><br>

                <button type="submit" id="updateAccountButton">Update Account</button>
            </form>