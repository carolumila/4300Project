<?php

include('database.php');
session_start();

// update password if user puts in the old & new password and old password is correct
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['password'];

$userID = $_SESSION['userID'];


$query2 = "SELECT * FROM user WHERE user_id='$userID' AND password='$oldPassword'";
$data = $db->query($query2); 

if($data->rowCount() > 0) {
    $query3="UPDATE user
                SET password = '$newPassword'
                WHERE user_id = '$userID'";
    $db->exec($query3);
    header("Location: change_password_success.php");
} else {
    header("Location: changePasswordError.php");
}

?>