<?php
    
    include('database.php');
    session_start();

    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $address = $_POST['streetAddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipCode'];
    $email = $_POST['email'];
    $user = $_POST['username'];

    $userID = $_SESSION['userID'];

    try {
        // update info in respective tables
        $query="UPDATE user
                    SET firstName = '$first', lastName = '$last', username = '$user', email = '$email'
                    WHERE user_id='$userID'";
        $db->exec($query);
        $query1="UPDATE profile
                    SET streetAddr = '$address',
                        city = '$city',
                        state = '$state',
                        zip = '$zip'
                    WHERE user_id = '$userID'";
        $db->exec($query1);

        header("Location: edit_profile_success.php");
    }
    catch (exception $e) {
        header("Location: updateAccountError.php");
    }

?>