<?php
    
    // Get Share Object PHP
    require 'dbaccess.php';
    
    $locationID = $_POST["locationID"];
    if($locationID == ""){
        // Send all shared objects ordered by hits
        $data = getGlobalShareObjects();
        // Send Shared Object JSON 
        echo json_encode($data);    
    }else{
        // Send shared objects of the location ordered by hits
        $data = getShareObjects($locationID);
        // Send Shared Object JSON 
        echo json_encode($data);   
    }
?>