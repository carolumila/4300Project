<?php

include('database.php');

$user = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$user' AND password='$password'";
$data = $db->query($query);

if($data->rowCount() > 0) {

    header("Location:index.php");
}
else {
    header("Location:signInError.php");
}

?>