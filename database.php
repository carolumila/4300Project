<?php

    $source='mysql:host=localhost; dbname=ugastore';
    $username='root';
    $password='';
    try{ $db= new PDO($source, $username, $password);}
    catch(PDOException $e){
        $error=$e->getMessage();
        echo "Connection Failed: ".$error;
        exit();
    }
?>