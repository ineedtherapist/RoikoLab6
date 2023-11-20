<?php

include "databaseConnect.php";



$id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM students WHERE id=:id");
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
    echo "Студент видалений успішно!";
} else {
    echo "Помилка видалення студента.";
}


include("showStudents.php")
?>
