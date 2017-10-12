<?php


require 'dbconn.php';

function addObject($shareObject){
    $conn = getConnection();
    $jsonObject = json_decode($shareObject);
    $stmt = $conn->prepare("INSERT INTO ShareObject(id, title, cdn, userID, lat, long, alt, datetime, areaID, hits) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sss", $jsonObject->id, $jsonObject->title, $jsonObject->cdn, $jsonObject->userID,$jsonObject->lat, $jsonObject->lang,$jsonObject->alt, $jsonObject->datetime,$jsonObject->areaID, $jsonObject->hits);
    $status = $stmt->execute();
    $stmt->close();
    closeConnection($con);
    return $status;
}
?>
