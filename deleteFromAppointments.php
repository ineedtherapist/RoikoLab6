<?php

include "databaseConnect.php";



$id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM appointments WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: showAppointments.php");
die();
?>
