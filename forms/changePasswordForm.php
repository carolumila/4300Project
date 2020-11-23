<script type="text/javascript">
function Validate() {
        var password = document.getElementById("firstPassword").value;
        var confirmPassword = document.getElementById("secondPassword").value;
        var pass = document.getElementById("passError");
        if (password != confirmPassword) {
            pass.innerHTML = "Passwords do not match. Try again.";
            return false;
        } else{
            pass.innerHTML = "";
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
                    <input type="password" name="newPassword" id="firstPassword" placeholder="new password" onkeyup="checkPass();" required>
                    <abbr id="passError" style="color:red;"></abbr><br>

                    <label for="newPassword2">Confirm New Password:</label>
                    <input type="password" name="newPassword2" id="secondPassword" placeholder="new password" onkeyup="checkPass();" required><br>
                </fieldset><br>

                <button type="submit" id="changePasswordButton" onclick="return Validate()">Change Password</button>
            </form>