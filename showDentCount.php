<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Dentists</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("
    SELECT COUNT(d.id) AS count_dentists FROM dentists d;
    ");
        // Виконання запиту і отримання результатів
        printf("<h1>Звіт - Кількість лікарів:</h1>");
        printf("<table><tr><th>Кількість лікарів</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td></tr>", $row['count_dentists']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>