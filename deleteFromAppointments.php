<?php

include "databaseConnect.php";



$id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM appointments WHERE id=:id");
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
    echo "Запис видалено успішно!";
} else {
    echo "Помилка видалення запису.";
}

header("Location: showAppointments.php");
die();
?>
