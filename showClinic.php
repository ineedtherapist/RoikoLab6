<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Clinic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Clinic</h1>


    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM clinic");
        // Виконання запиту і отримання результатів
        printf("<h3>Список клінік:</h3>");
        printf("<table><tr><th>ID</th><th>Назва клініки</th><th>Місто</th><th>Назва вулиці</th><th>Номер вулиці</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['city'], $row['street_name'], $row['street_num']);
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
