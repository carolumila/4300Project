<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("firstPassword").value;
            var confirmPassword = document.getElementById("secondPassword").value;
            if (password != confirmPassword) {
                alert("You first new password is not the same as the confirmation new password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>

<form id="changePasswordForm" action="changePassword.php" method="POST">
                <fieldset id="passwordInfo">
                    <legend><b>Change Password</b></legend>

                    <label for="oldPassword">Old Password:</label>
                    <input type="password" name="oldPassword" placeholder="previous password" required><br>

                    <label for="newPassword">Create New Password:</label>
                    <input type="password" name="newPassword" id="firstPassword" placeholder="new password" onkeyup="checkPass();" required><br>

                    <label for="newPassword2">Confirm New Password:</label>
                    <input type="password" name="newPassword2" id="secondPassword" placeholder="new password" onkeyup="checkPass();" required><br>
                </fieldset><br>

                <button type="submit" id="changePasswordButton" onclick="return Validate()">Change Password</button>
            </form>