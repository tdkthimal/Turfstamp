<?php
    
    // Save Advertisement PHP

    require 'advertisement_dbaccess.php';
    
    // Parse the JSON object
    $advertisementData = $_POST["advertisement"];       

    // Calling save function in dbaccess
    echo addAdvertisement($advertisementData);         

?>