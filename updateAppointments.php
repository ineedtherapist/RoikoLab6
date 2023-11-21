<?php

include "databaseConnect.php";

$id = $_POST['update_id'];
$appoint_time = $_POST['update_appoint_time'];
$dentist_id = $_POST['update_dentist_id'];
$stmt = $pdo->prepare("UPDATE appointments SET id=:app_id, appoint_time=:appoint_time, dentist_id=:dentist_id WHERE id=:app_id );
$stmt->bindParam(':id', $app_id);
$stmt->bindParam(':appoint_time', $appoint_time);
$stmt->bindParam(':dentist_id', $dentist_id);
if ($stmt->execute()) {
    printf("Запис оновлено успішно!");
} else {
    echo "Помилка оновлення запису";
}


include("showAppointments.php")
?>
