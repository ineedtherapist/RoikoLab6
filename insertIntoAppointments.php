<?php

include "databaseConnect.php";

$client_id = $_POST['insert_client_id'];
$appoint_time = $_POST['insert_appoint_time'];
$dentist_id = $_POST['insert_dentist_id'];
$service_id = $_POST['insert_service_id'];
$clinic_id = $_POST['insert_clinic_id'];
$stmt = $pdo->prepare("INSERT INTO appointments (service_id, appoint_time, client_id, dentist_id, clinic_id) VALUES (:service_id, :appoint_time, :client_id, :dentist_id, :clinic_id)");
$stmt->bindParam(':client_id', $client_id);
$stmt->bindParam(':appoint_time', $appoint_time);
$stmt->bindParam(':dentist_id', $dentist_id);
$stmt->bindParam(':service_id', $service_id);
$stmt->bindParam(':clinic_id', $clinic_id);
if ($stmt->execute()) {
    echo "Запис доданий успішно!";
} else {
    echo "Помилка додавання запису.";
}

header("Location: showAppointments.php");
die();
?>
