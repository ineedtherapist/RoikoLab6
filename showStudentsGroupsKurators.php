<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("
        SELECT s.name AS student_name, g.name AS group_name, c.name AS curator_name 
        FROM students s 
        LEFT JOIN groups g ON s.group_id = g.id 
        LEFT JOIN curators c ON g.curator_id = c.id
        ORDER BY g.name, s.name
        ");
        // Виконання запиту і отримання результатів
        printf("<h1>Звіт - Список студентів, груп і кураторів: </h1><br>");
        printf("<table><tr><th>Студент</th><th>Номер групи</th><th>Куратор</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['student_name'], $row['group_name'], $row['curator_name']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>



    <br><br><br>

    <ul>
        <li><a href="showStudents.php">Таблиця Students</a><br></li>
        <li><a href="showGroups.php">Таблиця Groups</a><br></li>
        <li><a href="showCurators.php">Таблиця Curators</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>