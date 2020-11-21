<?php

session_start();
include('database.php');

$user = $_POST['user'];
$password = $_POST['password'];
$_SESSION['username'] = $user;
$_SESSION['password'] = $password;

$query = "SELECT * FROM user WHERE username='$user' AND password='$password'";
$data = $db->query($query);

if($data->rowCount() > 0) {

    $_SESSION['flag'] = 1;
    header("Location:index.php");
}
else {
    header("Location:signInError.php");
}

?>