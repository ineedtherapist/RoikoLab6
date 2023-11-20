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
    SELECT g.name AS group_name, COUNT(s.group_id) AS students_count FROM students s LEFT JOIN groups g ON s.group_id = g.id GROUP BY s.group_id;
    ");
        // Виконання запиту і отримання результатів
        printf("<h1>Звіт - Кількість студентів в групах:</h1>");
        printf("<table><tr><th>Номер групи</th><th>Кількість студентів</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['group_name'], $row['students_count']);
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