<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Appointments</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Appointments</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM appointments");
        // Виконання запиту і отримання результатів
        printf("<h3>Список записів:</h3>");
        printf("<table><tr><th>ID</th><th>service_id</th><th>appoint_time</th><th>client_id </th><th>dentist_id</th><th>clinic_id </th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['service_id'], $row['appoint_time'], $row['client_id'], $row['dentist_id'], $row['clinic_id']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="searchAppointForm.php">Пошук запису</a><br></li>
        <li><a href="insertIntoAppointmentsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateAppointmentsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromAppointmentsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>