<?php
    
    // Called from backend after the day or week

    require 'token_dbaccess.php';
    
    // add a token to the database after processing hits per location ID 
    function addUserToken($userID, $areaID, $advertisementID){
        addToken($userID, $areaID, $advertisementID);
    }

?>