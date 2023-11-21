<?php

include "databaseConnect.php";

$id = $_POST['update_id'];
$phone = $_POST['update_phone'];
$allergies = $_POST['update_allergies'];
$stmt = $pdo->prepare("UPDATE clients SET id=:id, phone_number=:phone, allergies=:allergies WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':allergies', $allergies);
$stmt->execute();


header("Location: showClients.php");
die();
?>
