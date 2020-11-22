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