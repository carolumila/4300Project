<?php

session_start();

unset($_SESSION['flag']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['userID']);
unset($_SESSION['userType']);

header("Location: sign_in.php");

?>