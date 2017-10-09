<?php
    
    // Save Share Object PHP

    require 'object_dbaccess.php';
    
    // String objects
    /*
    $userID = $_POST["userID"];
    $title = $_POST["title"];
    $cdn = $_POST["cdn"];
    $lat = $_POST["lat"];
    $long = $_POST["long"];
    $alt = $_POST["alt"];
    $datetime = $_POST["datetime"];
    $areaID = $_POST["areaID"];
    // End of String objects
    $environmentalData = $_POST["environmentalData"];       //  This is a json object 
    */
    $shareObject = $_POST["shareObject"];       // Parse the JSON object

    // Calling save function in dbaccess
    echo saveShareObject($shareObject);         

?>