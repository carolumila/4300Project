<?php

    session_start();
    include('database.php');

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

        $userID = $_SESSION['userID'];

        $query1 = "SELECT * FROM profile 
                    WHERE user_id='$userID'";
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $profile = $statement1->fetch();  

        include('edit_profile_header.php');
?>

        <main>
            <h2><b>Your Profile</b></h2>
            <p id = "success">Your password has been successfully changed!</p>
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