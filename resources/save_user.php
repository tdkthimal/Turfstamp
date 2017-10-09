<?php
    
    // Save User PHP

    require 'user_dbaccess.php';
    
    // Parse the JSON object
    $userData = $_POST["user"];       

    // Calling save function in dbaccess
    echo saveShareObject($userData);         

?>