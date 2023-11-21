<html>
<head>
<meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Clients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Clients</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM clients");
        // Виконання запиту і отримання результатів
        printf("<h3>Список клієнтів:</h3>");
        printf("<table><tr><th>ID</th><th>name</th><th>lastname</th><th>middlename</th><th>phone_number</th><th>date_birth</th><th>allergies</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['lastname'], $row['middlename'], $row['phone_number'], $row['date_birth'], $row['allergies']);
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
