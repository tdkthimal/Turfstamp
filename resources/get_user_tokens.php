<?php
    
    // Get advertisement corresponding to the location 
    require 'user_dbaccess.php';
    
    $userID = $_POST["userID"];
    // Get the tokens user got so far
    $tokens = getTokens($userID);
    // Send tokens JSON array as the response 
    echo json_encode($tokens);    
?>