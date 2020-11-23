<?php
    include('database.php');

    $userID = isset($_POST['userID']) ? $_POST['userID'] : '';

    $query = $db->prepare("SELECT user_type FROM user WHERE user_id='$userID'");
    $query->execute(array($userID));
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if($user['user_type'] == 'admin'){ 
        $query = "UPDATE user SET user_type='customer' WHERE user_id='$userID'"; 
        $db->exec($query); 
        $_SESSION['userType'] = 'customer';
    }else{ 
        $query = "UPDATE user SET user_type='admin' WHERE user_id='$userID'"; 
        $db->exec($query);
        $_SESSION['userType'] = 'admin';
    }

    include('manageusers.php');
?>