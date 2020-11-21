<?php

include('database.php');

// update password if user puts in the old & new password and old password is correct
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['password'];

$query2 = "SELECT * FROM user WHERE user_id='$user_id' AND password='$oldPassword'";
$data = $db->query($query2); 

if($data->rowCount() > 0) {
    $query3="UPDATE user
                SET password = '$newPassword'
                WHERE user_id = '$user_id'";
    $db->exec($query3);
    header("Location: edit_profile_success.php");
} else {
    header("Location: changePasswordError.php");
}

?>