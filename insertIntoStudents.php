<?php

include "databaseConnect.php";

$name = $_POST['insert_name'];
$group_id = $_POST['insert_group_id'];
$stmt = $pdo->prepare("INSERT INTO students (name, group_id) VALUES (:name, :group_id)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':group_id', $group_id);
if ($stmt->execute()) {
    echo "Студент доданий успішно!";
} else {
    echo "Помилка додавання студента.";
}


include("showStudents.php")
?>
