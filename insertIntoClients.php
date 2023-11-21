<?php

include "databaseConnect.php";

$client_id = $_POST['insert_client_id'];
$client_name = $_POST['insert_client_name'];
$client_lastname = $_POST['insert_client_lastname'];
$client_middlename = $_POST['insert_client_middlename'];
$client_phone = $_POST['insert_client_phone'];
$client_datebirth = $_POST['insert_client_datebirth'];
$client_allergies = $_POST['insert_allergies'];
$stmt = $pdo->prepare("INSERT INTO clients (id, name, lastname, middlename, phone_number, date_birth, allergies)
VALUES (:client_id, :client_name, :client_lastname, :client_middlename, :client_phone, :client_datebirth, :client_allergies)");
$stmt->bindParam(':client_id', $client_id);
$stmt->bindParam(':client_name', $client_name);
$stmt->bindParam(':client_lastname', $client_lastname);
$stmt->bindParam(':client_middlename', $client_middlename);
$stmt->bindParam(':client_phone', $client_phone);
$stmt->bindParam(':client_datebirth', $client_datebirth);
$stmt->bindParam(':client_allergies', $client_allergies);
$stmt->execute();


header("Location: showClients.php");
die();
?>
