<?php
    include('database.php');

    session_start();

    if(!isset($_SESSION['flag']) || $_SESSION['flag'] != 1) {
        header("Location: sign_in.php");
    }
    else {  

        include('edit_profile_header.php');
?>

        <main>
            
            <h2><b>Your Profile</b></h2>
            <p class="error">An error occurred. Please try again.</p>
            <?php include('forms/updateInfoForm.php'); ?><br>

            <?php include('forms/changePasswordForm.php'); ?>
        </main>

        <footer>
            <p>&copy; 2020 UGA Marketplace</p>
        </footer>
    </body>

<?php
    }
?>