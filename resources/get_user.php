<?php
    
    // Get User  PHP
    require 'user_dbaccess.php';
    
    $userID = $_POST["userID"];
    // Send all shared objects ordered by hits
    $user = getUser($userID);
    // Send User JSON 
    echo json_encode($user);    
?>