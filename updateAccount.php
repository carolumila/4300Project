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

    $cardNumber = $_POST['cardNumber'];
    $cardType = $_POST['cardType'];
    $cardExp = $_POST['cardExp'];

    $userID = $_SESSION['userID'];

    try {
        // update info in respective tables
        $query="UPDATE user
                    SET firstName = '$first', lastName = '$last', email = '$email'
                    WHERE user_id='$userID'";
        $db->exec($query);
        $query1="UPDATE profile
                    SET streetAddr = '$address',
                        city = '$city',
                        state = '$state',
                        zip = '$zip'
                    WHERE user_id = '$userID'";
        $db->exec($query1);
        $query2="UPDATE paymentcard
                    SET cardNumber = '$cardNumber', type = '$cardType', expDate = '$cardExp'
                    WHERE user_id = '$userID'";
        $db->exec($query2);

        header("Location: edit_profile_success.php");
    }
    catch (exception $e) {
        header("Location: updateAccountError.php");
    }

?>