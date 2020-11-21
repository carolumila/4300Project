<?php

session_start();

unset($_SESSION['flag']);
unset($_SESSION['username']);
unset($_SESSION['password']);

header("Location: sign_in.php");

?>