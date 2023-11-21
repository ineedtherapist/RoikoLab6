<?php

include "databaseConnect.php";



$id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM clients WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: showClients.php");
die();
?>
