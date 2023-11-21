<?php

include "databaseConnect.php";

$student_id = $_POST['update_id'];
$student_name = $_POST['update_name'];
$group_id = $_POST['update_group_id'];
$stmt = $pdo->prepare("UPDATE students SET name=:student_name, group_id=:group_id WHERE id=:student_id");
$stmt->bindParam(':student_id', $student_id);
$stmt->bindParam(':student_name', $student_name);
$stmt->bindParam(':group_id', $group_id);
if ($stmt->execute()) {
    echo "Студент оновлений успішно!";
} else {
    echo "Помилка оновлення студента.";
}


include("showStudents.php")
?>
