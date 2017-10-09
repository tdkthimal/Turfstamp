<?php
    
    // Get advertisement corresponding to the location 
    require 'advertisement_dbaccess.php';
    

    $areaID = $_POST["areaID"];
    // Get the advertisement related to area ID
    $advertisement = getAdvertisement($areaID);
    // Send advertisement JSON to frontend 
    echo json_encode($advertisement);    
?>