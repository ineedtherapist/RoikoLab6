<?php

include "databaseConnect.php";

$app_id = $_POST['update_id'];
$appoint_time = $_POST['update_appoint_time'];
$dentist_id = $_POST['update_dentist_id'];
$stmt = $pdo->prepare("UPDATE appointments SET id=:id, appoint_time=:appoint_time, dentist_id=:dentist_id WHERE id=:id");
$stmt->bindParam(':id', $app_id);
$stmt->bindParam(':appoint_time', $appoint_time);
$stmt->bindParam(':dentist_id', $dentist_id);
$stmt->execute();


header("Location: showAppointments.php");
die();
?>
