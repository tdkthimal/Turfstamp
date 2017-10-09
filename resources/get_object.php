<?php
    
    // Get Share Object PHP
    require 'object_dbaccess.php';

    $locationID = $_POST["locationID"];
    if($locationID == ""){
        // Send all shared objects ordered by hits
        // Array of Share Object JSONs should be returned
        $data = getGlobalShareObjects();    
        // Send Shared Object JSON 
        echo json_encode($data);     
    }else{
        // Send shared objects of the location ordered by hits
        // Array of Share Object JSONs should be returned
        $data = getShareObjects($locationID);   
        // Send Shared Object JSON 
        echo json_encode($data);   
    }
?>